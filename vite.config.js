import fs from "fs";
import laravel from "laravel-vite-plugin";
import { defineConfig, loadEnv } from "vite";
import { homedir } from "os";
import { resolve } from "path";

export default ({ mode }) => {
    process.env = { ...process.env, ...loadEnv(mode, process.cwd()) };
    const host = process.env.VITE_DOMAIN;

    return defineConfig({
        server: detectServerConfig(host),
        plugins: [
            laravel(["resources/app.css", "resources/app.js"]),
            {
                name: "blade",
                handleHotUpdate({ file, server }) {
                    if (file.endsWith(".blade.php")) {
                        server.ws.send({
                            type: "full-reload",
                            path: "*",
                        });
                    }
                },
            },
        ],
    });
};

function detectServerConfig(host) {
    let keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`);
    let certificatePath = resolve(
        homedir(),
        `.config/valet/Certificates/${host}.crt`
    );

    if (!fs.existsSync(keyPath)) {
        return {};
    }

    if (!fs.existsSync(certificatePath)) {
        return {};
    }

    return {
        hmr: { host },
        host,
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    };
}
