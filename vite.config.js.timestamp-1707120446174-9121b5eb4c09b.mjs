// vite.config.js
import { defineConfig } from "file:///C:/laragon/www/sumburero/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/sumburero/node_modules/laravel-vite-plugin/dist/index.mjs";
import path from "path";
var __vite_injected_original_dirname = "C:\\laragon\\www\\sumburero";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/css/gtranslator.css",
        "resources/js/app.js",
        "resources/js/splide.js"
      ],
      refresh: true
    })
  ],
  server: {
    watch: {
      ignored: ["**/storage/**"]
    }
  },
  resolve: {
    alias: {
      "@": path.resolve(__vite_injected_original_dirname, "./resources/js"),
      "@images": path.resolve(__vite_injected_original_dirname, "./resources/images")
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxzdW1idXJlcm9cIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkM6XFxcXGxhcmFnb25cXFxcd3d3XFxcXHN1bWJ1cmVyb1xcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vQzovbGFyYWdvbi93d3cvc3VtYnVyZXJvL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSBcInZpdGVcIjtcbmltcG9ydCBsYXJhdmVsIGZyb20gXCJsYXJhdmVsLXZpdGUtcGx1Z2luXCI7XG5pbXBvcnQgcGF0aCBmcm9tIFwicGF0aFwiO1xuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoe1xuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogW1xuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2Nzcy9hcHAuY3NzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvY3NzL2d0cmFuc2xhdG9yLmNzc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2FwcC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3NwbGlkZS5qc1wiLFxuICAgICAgICAgICAgXSxcbiAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXG4gICAgICAgIH0pLFxuICAgIF0sXG4gICAgc2VydmVyOiB7XG4gICAgICAgIHdhdGNoOiB7XG4gICAgICAgICAgICBpZ25vcmVkOiBbXCIqKi9zdG9yYWdlLyoqXCJdLFxuICAgICAgICB9LFxuICAgIH0sXG4gICAgcmVzb2x2ZToge1xuICAgICAgICBhbGlhczoge1xuICAgICAgICAgICAgXCJAXCI6IHBhdGgucmVzb2x2ZShfX2Rpcm5hbWUsIFwiLi9yZXNvdXJjZXMvanNcIiksXG4gICAgICAgICAgICBcIkBpbWFnZXNcIjogcGF0aC5yZXNvbHZlKF9fZGlybmFtZSwgXCIuL3Jlc291cmNlcy9pbWFnZXNcIiksXG4gICAgICAgIH0sXG4gICAgfSxcbn0pO1xuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUFrUSxTQUFTLG9CQUFvQjtBQUMvUixPQUFPLGFBQWE7QUFDcEIsT0FBTyxVQUFVO0FBRmpCLElBQU0sbUNBQW1DO0FBSXpDLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLFNBQVM7QUFBQSxJQUNMLFFBQVE7QUFBQSxNQUNKLE9BQU87QUFBQSxRQUNIO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsTUFDSjtBQUFBLE1BQ0EsU0FBUztBQUFBLElBQ2IsQ0FBQztBQUFBLEVBQ0w7QUFBQSxFQUNBLFFBQVE7QUFBQSxJQUNKLE9BQU87QUFBQSxNQUNILFNBQVMsQ0FBQyxlQUFlO0FBQUEsSUFDN0I7QUFBQSxFQUNKO0FBQUEsRUFDQSxTQUFTO0FBQUEsSUFDTCxPQUFPO0FBQUEsTUFDSCxLQUFLLEtBQUssUUFBUSxrQ0FBVyxnQkFBZ0I7QUFBQSxNQUM3QyxXQUFXLEtBQUssUUFBUSxrQ0FBVyxvQkFBb0I7QUFBQSxJQUMzRDtBQUFBLEVBQ0o7QUFDSixDQUFDOyIsCiAgIm5hbWVzIjogW10KfQo=
