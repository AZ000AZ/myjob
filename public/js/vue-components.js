// Ayrı bir dosyada Vue bileşenlerini tutmak isterseniz

// Job Search Mixin
const jobSearchMixin = {
    methods: {
        formatSalary(salary) {
            return salary.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },

        formatDate(date) {
            return new Date(date).toLocaleDateString("tr-TR")
        },

        showNotification(message, type = "info") {
            const toastr = window.toastr // Declare the toastr variable
            toastr[type](message)
        },
    },
}

// Global Vue filters (Vue 3 için global properties olarak)
const globalProperties = {
    $formatCurrency: (value) => {
        return new Intl.NumberFormat("tr-TR", {
            style: "currency",
            currency: "TRY",
        }).format(value)
    },

    $truncate: (text, length = 100) => {
        return text.length > length ? text.substring(0, length) + "..." : text
    },
}

// Export for use in main app
if (typeof module !== "undefined" && module.exports) {
    module.exports = {
        jobSearchMixin,
        globalProperties,
    }
}
