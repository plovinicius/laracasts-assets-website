import Logo from './components/Logo.vue';
import LogoSymbol from './components/LogoSymbol.vue';
import Colors from './components/Colors.vue';
import Typography from './components/Typography.vue';
import Mascot from './components/Mascot.vue';
import Illustrations from './components/Illustrations.vue';
import Wallpapers from './components/Wallpapers.vue';
import NotFound from './components/NotFound.vue';

let LoadersAnimations = () => import(/* webpackChunkName: "loaders" */ './components/LoadersAnimations.vue');

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {
            path: '*',
            component: NotFound,
        },
        {
            path: '/',
            component: Logo,
            name: 'logo'
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol,
            name: 'logo-symbol'
        },
        {
            path: '/colors',
            component: Colors,
            name: 'colors'
        },
        {
            path: '/typography',
            component: Typography,
            name: 'typography'
        },
        {
            path: '/mascot',
            component: Mascot,
            name: 'mascot'
        },
        {
            path: '/illustrations',
            component: Illustrations,
            name: 'illustrations'
        },
        {
            path: '/loaders-animations',
            component: LoadersAnimations,
            name: 'loaders-animations'
        },
        {
            path: '/wallpapers',
            component: Wallpapers,
            name: 'wallpapers'
        },
    ]
};
