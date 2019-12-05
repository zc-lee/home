
const components = [
], componentsObj = {
    menu: 'menu/menu'
}

function install(Vue) {
    for (let [key, path] of Object.entries(componentsObj)) {
        Vue.component(`l-${key}`, () => import(`./components/${path}.vue`));
    }
    // components.map(function (component) {
    //     Vue.component(`l-${component}`, () => import(`./components/${component}.vue`));
    // });
}

export default install