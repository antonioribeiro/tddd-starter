import Vue from 'vue'
import App from '../src/App'

describe('App.test.js', () => {
    let cmp, vm

    beforeEach(() => {
        cmp = Vue.extend(App) // Create a copy of the original component
        vm = new cmp({
            data: { // Replace data value with this fake data
                messages: ['Laravel Tests Watcher - Testing Vue with Jest']
            }
        }).$mount() // Instances and mounts the component
    })

    it('equals messages to ["Laravel Tests Watcher - Testing Vue with Jest"]', () => {
        expect(vm.messages).toEqual(['Laravel Tests Watcher - Testing Vue with Jest'])
    })
})
