module.exports = {
    proxy: "perfectonderwijsmatch.local",
    notify: false,
    files: ["./css/*.min.css", "./js/*.min.js", "./**/*.php"],
    tunnel: false,
    browser: ["google chrome", "firefox"],
};
