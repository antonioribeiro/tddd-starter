/**
 * export default
 */
export default {
    template: '<div><h1>{{ notification }}</h1></div>',

    props: ['message'],

    computed: {
        notification() {
            return this.message.toUpperCase();
        }
    }
};
