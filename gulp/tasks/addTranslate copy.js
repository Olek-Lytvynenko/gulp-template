const fs = require("fs");
const path = require("path");
const ExcelJS = require("exceljs");

const folderPath = "./views";
const fileName = "translate.xlsx";

async function writeToExcel(data, nameXlsxFile) {
  const workbook = new ExcelJS.Workbook();
  const worksheet = workbook.addWorksheet("translate");
  worksheet.columns = [
    {
      header: "English",
      key: "a",
      width: 80,
      style: {
        font: { name: "Arial", size: "12" },
        alignment: { wrapText: true },
        border: {
          top: { style: "thin" },
          left: { style: "thin" },
          bottom: { style: "thin" },
          right: { style: "thin" },
        },
      },
    },
    {
      header: "Translate",
      key: "b",
      width: 80,
      style: {
        font: { name: "Arial", size: "12" },
      },
    },
  ];

  worksheet.getCell("A1").fill = {
    type: "pattern",
    pattern: "solid",
    fgColor: { argb: "72d4b400" },
  };

  worksheet.getCell("B1").fill = {
    type: "pattern",
    pattern: "solid",
    fgColor: { argb: "72f4b400" },
  };

  worksheet.getCell("A1").alignment = {
    vertical: "middle",
    horizontal: "center",
  };
  worksheet.getCell("B1").alignment = {
    vertical: "middle",
    horizontal: "center",
  };

  data.forEach((row) => {
    worksheet.addRow([row]);
  });

  try {
    await workbook.xlsx.writeFile(nameXlsxFile);
    console.log("\x1b[94m", `Add new data to ${nameXlsxFile}\x1b[0m`);
    return;
  } catch (err) {
    console.error("\x1b[31m", "Error when creating a file XLSX:\x1b[0m", err);
    return;
  }
}

function getAllFilesInFolder(folderPath) {
  return new Promise((resolve, reject) => {
    fs.readdir(folderPath, "utf8", (err, files) => {
      if (err) {
        reject(err);
        return;
      }

      const filePromises = files.map((file) => {
        const filePath = path.join(folderPath, file);

        return new Promise((resolve, reject) => {
          fs.stat(filePath, (err, stats) => {
            if (err) {
              reject(err);
              return;
            }

            if (stats.isFile()) {
              console.log("Find:", `\x1b[32m${file}\x1b[0m`);
              resolve([file]);
            } else if (stats.isDirectory()) {
              getAllFilesInFolder(filePath)
                .then((subFiles) =>
                  resolve(subFiles.map((subFile) => path.join(file, subFile)))
                )
                .catch(reject);
            }
          });
        });
      });

      Promise.all(filePromises)
        .then((results) => {
          const filesArray = [].concat(...results);
          resolve(filesArray);
        })
        .catch(reject);
    });
  });
}

function readFiles(filePaths) {
  const filePromises = filePaths.map((filePath) => {
    return new Promise((resolve, reject) => {
      fs.readFile(`${folderPath}/${filePath}`, "utf8", (err, data) => {
        if (err) {
          reject(err);
          return;
        }
        const searchData = data.match(
          /(?<=Lang:{2}t\(')(.*?)(?='\))/gm || /(?<=Lang:{2}t\(')(.*?)(?='\))/gm
        );
        const fileName = `/*${path.basename(filePath).replace(".php", "")}*/`;

        if (searchData) {
          searchData[0] = fileName;
          console.log("Read:", `\x1b[32m${fileName}\x1b[0m`);
          resolve(searchData);
        } else {
          const emptyFile = [];
          console.log("\x1b[33mEmpty:", `${fileName}\x1b[0m`);
          emptyFile[0] = fileName;
          resolve(emptyFile);
        }
      });
    });
  });

  return Promise.all(filePromises);
}

const getContents = async () => {
  try {
    const listFilePath = await getAllFilesInFolder(folderPath);
    const fileContent = await readFiles(listFilePath);
    const contentsTable = fileContent.flat();
    const filteredContentsTable = contentsTable.filter(
      (row, i) => contentsTable.indexOf(row) === i || row.slice(0, 2) === "/*"
    );
    await writeToExcel(filteredContentsTable, fileName);
  } catch (err) {
    console.error(err);
  }
};

export const translate = getContents;
