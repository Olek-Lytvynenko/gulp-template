// eslint-disable-next-line no-unused-vars
export const server = (done) => {
  app.plugins.browsersync.init({
    server: {
      baseDir: `${app.path.build.html}`,
    },
    notify: true,
    port: 5500,
  });
};
