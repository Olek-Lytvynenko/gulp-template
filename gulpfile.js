import gulp from "gulp";
import { path } from "./gulp/config/path.js";
import { plugins } from "./gulp/config/plugins.js";

global.app = {
  isBuild: process.argv.includes("--build"),
  isDev: !process.argv.includes("--build"),
  path: path,
  gulp: gulp,
  plugins: plugins,
};

import { copy } from "./gulp/tasks/copy.js";
import { reset } from "./gulp/tasks/reset.js";
import { html } from "./gulp/tasks/html.js";
import { server } from "./gulp/tasks/server.js";
import { scss } from "./gulp/tasks/scss.js";
import { js } from "./gulp/tasks/js.js";
import { images } from "./gulp/tasks/images.js";
import { otfToTtf, ttfToWoff, fontsStyle } from "./gulp/tasks/fonts.js";
import { svgSpriteM } from "./gulp/tasks/svgSpriteM.js";
import { zip } from "./gulp/tasks/zip.js";
import { gitHubPage } from "./gulp/tasks/gitHubPage.js";
import { translate } from "./gulp/tasks/addTranslate.js";

function watcher() {
  gulp.watch(path.watch.files, copy);
  gulp.watch(path.watch.html, html);
  gulp.watch(path.watch.files, reset);
  gulp.watch(path.watch.scss, scss);
  gulp.watch(path.watch.js, js);
  gulp.watch(path.watch.images, images);
}

export { svgSpriteM };

const fonts = gulp.series(otfToTtf, ttfToWoff, fontsStyle);

const mainTask = gulp.series(
  fonts,
  gulp.parallel(copy, html, scss, js, images)
);

const dev = gulp.series(reset, mainTask, gulp.parallel(watcher, server));

const build = gulp.series(reset, mainTask);

const deployGitHub = gulp.series(build, gitHubPage);

const deployZIP = gulp.series(reset, mainTask, zip);

export { dev };
export { build };
export { deployZIP };
export { deployGitHub };
export { fonts };

gulp.task("default", dev);
gulp.task("translate", translate);
