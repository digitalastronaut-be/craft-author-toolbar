import { defineConfig } from "vite";

const HTTP_PORT = 3006;

export default defineConfig(({ command }) => ({
	base: command === "serve" ? "" : "/dist/",
	build: {
		outDir: "./src/web/assets/dist",
		manifest: true,
		emptyOutDir: true,
		rollupOptions: {
			input: ["src/web/assets/src/js/index.js"],
		},
	},
	server: {
		host: "0.0.0.0",
		port: HTTP_PORT,
		strictPort: true,
		cors: true,
	},
}));
