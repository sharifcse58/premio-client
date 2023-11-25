new Vue({
    el: '#app',
    data: {
        formData: {
            domain: 'exmaple.com',
            rules: [
                { show: 'show', type: 'contains', value: '' }
            ]
        }
    },
    methods: {
        addRule() {
            this.formData.rules.push({ show: 'show', type: 'contains', value: '' });
        },
        removeRule(index) {
            this.rules.splice(index, 1);
        }
    }
});
