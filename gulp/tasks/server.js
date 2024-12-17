export const server = (done) => {
   app.plugins.browsersync.init({
      proxy: 'http://revo',
      host: 'revo',
      open: 'external'
   });
}