import "./bootstrap";

import Alpine from "alpinejs";
import AsyncAlpine from "async-alpine";

Alpine.plugin(AsyncAlpine);

document.addEventListener("alpine:init", () => {
    Alpine.asyncData("chartmap", () => import("./chartmap.js"));
    Alpine.asyncData("chartsources", () => import("./chartsources.js"));
});

window.Alpine = Alpine;

Alpine.start();
