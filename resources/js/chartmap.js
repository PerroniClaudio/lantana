import { ChoroplethChart, topojson } from "chartjs-chart-geo";

export const chartmap = (data) => {
    return {
        init: async function () {
            const ctrequest = await fetch(
                "https://unpkg.com/world-atlas/countries-50m.json"
            );
            const ctdata = await ctrequest.json();
            const countries = topojson.feature(
                ctdata,
                ctdata.objects.countries
            ).features;

            console.log("chartmap.js initialized");

            const ctx = document
                .getElementById("chart-map-element")
                .getContext("2d");

            const chart = new ChoroplethChart(ctx, {
                type: "cloropleth",
                data: {
                    labels: countries.map((d) => d.properties.name),
                    datasets: [
                        {
                            label: "Countries",
                            data: countries.map((d) => ({
                                feature: d,
                                value: Math.random(),
                            })),
                        },
                    ],
                },
                options: {
                    showOutline: true,
                    showGraticule: true,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    scales: {
                        projection: {
                            axis: "x",
                            projection: "equalEarth",
                        },
                        color: {
                            axis: "x",
                            interpolate: "reds",
                            missing: "white",
                            legend: {
                                position: "bottom-right",
                            },
                        },
                    },
                },
            });
        },
    };
};
