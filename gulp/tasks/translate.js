// import engine from "php-parser";
// import replace from "gulp-replace";
// import Excel from "excel4node";
// import gulp from "gulp";
// import _ from "lodash";

// const excelFilePath = "./result.xlsx";
// const parser = new engine({
//   // some options :
//   parser: {
//     extractDoc: true,
//     php7: true,
//   },
//   ast: {
//     withPositions: true,
//   },
// });Е

// export const searchPhpFiles = () => {
//   return gulp
//     .src("./views/**/*.php", { nodir: true }) // Пошук усіх файлів з розширенням PHP
//     .pipe(
//       new engine({
//         // some options :
//         parser: {
//           extractDoc: true,
//           php7: true,
//         },
//         ast: {
//           withPositions: true,
//         },
//       })
//     ) // Розбір PHP файлів
//     .pipe(replace(/(?<=Lang:{2}t\(')(.*?)(?='\))/gm))
//     .on("data", function (file) {
//       console.log(file);
//       const results = file.contents; // Значення, отримані з регулярного виразу
//       if (_.isArray(results) && results.length > 0) {
//         createExcelFile(results); // Створення таблиці Excel зі значеннями
//       }
//     });
// };

// function createExcelFile(results) {
//   const workbook = new Excel.Workbook();
//   const worksheet = workbook.addWorksheet("Results");

//   // Додавання значень у таблицю Excel
//   results.forEach((value, index) => {
//     const cell = worksheet.cell(index + 1, 1);
//     cell.string(value);
//   });

//   // Збереження файлу Excel
//   workbook.write(excelFilePath, function (err) {
//     if (err) {
//       console.log("Помилка при збереженні файлу Excel:", err);
//     } else {
//       console.log("Файл Excel успішно створено:", path.resolve(excelFilePath));
//     }
//   });
// }
