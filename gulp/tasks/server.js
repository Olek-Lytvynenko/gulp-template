// eslint-disable-next-line no-unused-vars
const proxy = "gulp.test.com";
export const server = (done) => {
  app.plugins.browsersync.init({
    injectChanges: false,
    proxy: proxy,
    notify: false,
  });
};
