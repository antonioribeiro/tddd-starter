import { shallow } from 'vue-test-utils'
import App from '../src/App'

describe('App.test.js', () => {
    let cmp

    beforeEach(() => {
        cmp = shallow(App, { // Create a shallow instance of the component
            data: {
                messages: ['Shallow - Laravel Tests Watcher - Testing Vue with Jest']
            }
        })
    })

    it('equals messages to ["Shallow - Laravel Tests Watcher - Testing Vue with Jest"]', () => {
        // Within cmp.vm, we can access all Vue instance methods
        expect(cmp.vm.messages).toEqual(['Shallow - Laravel Tests Watcher - Testing Vue with Jest'])
    })

    it('has the expected html structure', () => {
        expect(cmp.element).toMatchSnapshot()
    })
})
