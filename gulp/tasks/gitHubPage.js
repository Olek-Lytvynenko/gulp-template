import ghPages from "gulp-gh-pages";

export const gitHubPage = () => {
  return global.app.gulp
    .src(`${global.app.path.buildFolder}/**/*`)
    .pipe(ghPages());
};
