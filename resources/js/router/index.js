import {createRouter, createWebHistory} from "vue-router"

import  ItemIndex from '../components/items/ItemIndex'

const routes = [
    {
        path: '/',
        name: 'items.index',
        component: ItemIndex
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})