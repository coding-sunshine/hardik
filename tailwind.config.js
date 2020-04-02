module.exports = {
    theme: {
        screens: {
            'xl': {'max': '1090px'},
            // => @media (max-width: 1279px) { ... }

            'lg': {'max': '770px'},
            // => @media (max-width: 1023px) { ... }

            'md': {'max': '590px'},
            // => @media (max-width: 767px) { ... }

            'sm': {'max': '639px'},
            // => @media (max-width: 639px) { ... }
        },
        extend: {
            spacing: {
                "72": "360px",
                "84": "200px"
            }
        },
        inset: {
            "0": 0,
            auto: "auto",
            "1/2": "5px"
        },
        zIndex: {
            "0": 0,
            "10": "-1",
            "20": 20,
            "30": 30,
            "40": 40,
            "50": 50,
            "25": 25,
            "50": 50,
            "75": 75,
            "100": 100,
            auto: "auto"
        }
    },
    variants: {
        flex: ["responsive", "hover", "focus", "group-hover"]
    },
    plugins: [
        require('@tailwindcss/custom-forms')
    ]
}
