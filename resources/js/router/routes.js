function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [

      // root route
  { path: '/', name: 'welcome', component: page('welcome.vue') },
      // Auth routes
  { path: '/login', name: 'login', component: page('auth/login.vue') },
  { path: '/register', name: 'register', component: page('auth/register.vue') },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },

      // Home route (After logging in)
  { path: '/home', name: 'home', component: page('home.vue') },
  { path: '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') },
      { path: 'education', name: 'settings.education', component: page('settings/education.vue') },

    ] },
      // Frontend Routes
        // Resumes routes
        {path:'/resumes',name:'resumes.index',component:page('resumes/index.vue')},
        {path:'/resumes/:id',name:'resumes.show',component:page('resumes/show.vue')},

        // Orders routes 
        {path:'/orders',name:'orders.index',component:page('orders/index.vue')},
        {path:'/orders/:id',name:'orders.show',component:page('orders/show.vue')}, 
        {path:'/orders/create',name:'orders.create',component:page('orders/create.vue')}, 
    
      // Dashboard Routes
      {path:'/admin',name:'admin.index',component:page('admin/index.vue')},
            // Resumes
        {path:'/admin/resumes',name:'admin.resumes.index',component:page('admin/resumes/index.vue')},
        {path:'/admin/resumes/create',name:'admin.resumes.create',component:page('admin/resumes/create.vue')},
        {path:'/admin/resumes/:id',name:'admin.resumes.show',component:page('admin/resumes/show.vue')},
            // Orders
        {path:'/admin/orders',name:'admin.orders.index',component:page('admin/orders/index.vue')},
        {path:'/admin/orders/:id',name:'admin.orders.show',component:page('admin/orders/show.vue')},

      // Erros routes
  {path: '*', component: page('errors/404.vue') },


]
