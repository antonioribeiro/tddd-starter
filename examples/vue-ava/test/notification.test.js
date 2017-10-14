import Vue from 'vue/dist/vue.js';
import test from 'ava';
import Notification from '../src/Notification';

let vm;

test.beforeEach(t => {
    let N = Vue.extend(Notification);

    vm = new N({ propsData: {
        message: 'Foobar'
    }}).$mount();
});


test('that it renders a notification', t => {
    t.is(vm.$el.textContent, 'FOOBAR');
});

test('that it renders a notification', t => {
    t.is(vm.$el.textContent, 'FOOBAR');
});

test('that it renders a notification', t => {
    t.is(vm.$el.textContent, 'FOOBAR');
});
