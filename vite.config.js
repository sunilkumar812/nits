import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";
import { resolve } from "path";

export default defineConfig({
  plugins: [
    liveReload([
      resolve(__dirname, "**/*.php"),
      resolve(__dirname, "template-parts/**/*.php"),
    ]),
  ],
  root: resolve(__dirname, "assets/src"),
  base: "/",
  build: {
    outDir: resolve(__dirname, "assets/dist"),
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: resolve(__dirname, "assets/src/js/main.js"),
      },
      output: {
        entryFileNames: "js/[name]-[hash].js",
        chunkFileNames: "js/[name]-[hash].js",
        assetFileNames: ({ name }) => {
          if (/\.(gif|jpe?g|png|svg)$/.test(name ?? "")) {
            return "images/[name]-[hash][extname]";
          }
          if (/\.css$/.test(name ?? "")) {
            return "css/[name]-[hash][extname]";
          }
          return "[name]-[hash][extname]";
        },
      },
    },
  },
  server: {
    cors: true,
    strictPort: true,
    port: 3200,
    host: "localhost",
    hmr: {
      host: "localhost",
    },
  },
});