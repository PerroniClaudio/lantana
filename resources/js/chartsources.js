import Chart from "chart.js/auto";

export const chartsources = (data) => {
    data = [
        { source: "Google", value: 50 },
        { source: "Facebook", value: 25 },
        { source: "Twitter", value: 15 },
        { source: "Other", value: 10 },
    ];

    return {
        init: async function () {
            const ctx = document
                .getElementById("chart-sources-element")
                .getContext("2d");

            const chart = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: data.map((d) => d.source),
                    datasets: [
                        {
                            label: "Sources",
                            data: data.map((d) => d.value),
                            backgroundColor: [
                                "rgba(255, 99, 132, 0.2)",
                                "rgba(255, 159, 64, 0.2)",
                                "rgba(255, 205, 86, 0.2)",
                                "rgba(255, 99, 132, 0.2)",
                            ],
                            borderColor: [
                                "rgba(255, 99, 132, 1)",
                                "rgba(255, 159, 64, 1)",
                                "rgba(255, 205, 86, 1)",
                                "rgba(255, 99, 132, 1)",
                            ],
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    plugins: {
                        legend: {
                            position: "bottom",
                        },
                    },
                },
            });

            console.log("chartsources.js initialized");
        },
    };
};
