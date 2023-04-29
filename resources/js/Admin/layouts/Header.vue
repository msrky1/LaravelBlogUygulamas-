<template>
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <a
                                id="sidepanel-toggler"
                                class="sidepanel-toggler d-inline-block d-xl-none"
                                href="#"
                            >
                                <svg
                                    @click="toggle"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 30 30"
                                    role="img"
                                >
                                    <title>Menü</title>
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-miterlimit="10"
                                        stroke-width="2"
                                        d="M4 7h22M4 15h22M4 23h22"
                                    ></path>
                                </svg>
                            </a>
                        </div>
                        <!--//col-->
                        <div class="search-mobile-trigger d-sm-none col">
                            <i
                                class="search-mobile-trigger-icon fas fa-search"
                            ></i>
                        </div>
                        <!--//col-->

                        <!--//app-search-box-->

                        <div class="app-utilities col-auto">
                            <div
                                class="app-utility-item app-notifications-dropdown dropdown"
                            >
                                <a
                                    class="dropdown-toggle no-toggle-arrow"
                                    id="notifications-dropdown-toggle"
                                    data-toggle="dropdown"
                                    href="/blog-list"
                                    role="button"
                                    aria-expanded="false"
                                    title="Notifications"
                                >
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

                                    {{ users.name }} </a
                                ><!--//dropdown-toggle-->

                                <!--//dropdown-menu-->
                            </div>
                            <!--//app-utility-item-->

                            <!--//app-utility-item-->

                            <!--//app-user-dropdown-->
                        </div>
                        <!--//app-utilities-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-header-content-->
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-header-inner-->
        <div
         
            class="app-sidepanel"
         
            :class="[isActive ? activeClass : 'sidepanel-visible']"

        >
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a
                    href="#"
                    @click="toggle"
                    class="sidepanel-close d-xl-none"
                    >&times;</a
                >
                <div class="app-branding">
                    <span class="logo-text">Admin Paneli</span>
                </div>
                <!--//app-branding-->

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul
                        class="app-menu list-unstyled accordion"
                        id="menu-accordion"
                    >
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <router-link :to="{ name: 'admin-paneli' }">
                                <a class="nav-link active" href="#">
                                    <span class="nav-icon">
                                        <svg
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 16 16"
                                            class="bi bi-house-door"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text"
                                        >Anasayfa</span
                                    > </a
                                ><!--//nav-link--></router-link
                            >
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <router-link
                                :props="user.name"
                                :to="`/blog/${users.id}`"
                            >
                                <a class="nav-link" href="#">
                                    <span class="nav-icon">
                                        <svg
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 16 16"
                                            class="bi bi-folder"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Blog</span>
                                </a></router-link
                            >
                        </li>
                        <!--//nav-item-->
                        <router-link :to="{ name: 'blog-all' }">
                            <li class="nav-item" v-if="users.status == 'admin'">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link" href="orders.html">
                                    <span class="nav-icon">
                                        <svg
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 16 16"
                                            class="bi bi-card-list"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"
                                            />
                                            <circle cx="3.5" cy="5.5" r=".5" />
                                            <circle cx="3.5" cy="8" r=".5" />
                                            <circle cx="3.5" cy="10.5" r=".5" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text"
                                        >Tüm Yazılar</span
                                    > </a
                                ><!--//nav-link-->
                            </li>
                        </router-link>
                        <router-link :to="{ name: 'users' }">
                            <li class="nav-item" v-if="users.status == 'admin'">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link" href="orders.html">
                                    <span class="nav-icon">
                                        <svg
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 16 16"
                                            class="bi bi-card-list"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"
                                            />
                                            <circle cx="3.5" cy="5.5" r=".5" />
                                            <circle cx="3.5" cy="8" r=".5" />
                                            <circle cx="3.5" cy="10.5" r=".5" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text"
                                        >Kullanıcılar</span
                                    > </a
                                ><!--//nav-link-->
                            </li>
                        </router-link>
                        <!--//nav-item-->

                        <!--//nav-item-->

                        <!--//nav-item-->

                        <!--//nav-item-->

                        <!--//nav-item-->
                    </ul>
                    <!--//app-menu-->
                </nav>
                <!--//app-nav-->
                <div class="app-sidepanel-footer">
                    <nav class="app-nav app-nav-footer">
                        <ul class="app-menu footer-menu list-unstyled">
                            <!--//nav-item-->

                            <!--//nav-item-->

                            <!--//nav-item-->
                        </ul>
                        <!--//footer-menu-->
                    </nav>
                </div>
                <!--//app-sidepanel-footer-->
            </div>
            <!--//sidepanel-inner-->
        </div>
        <!--//app-sidepanel-->
    </header>
</template>

<script>
export default {
    props: ["users"],

    data() {
        return {
            user: [],
            isActive: true,
            activeClass: '',
           
            // active: 'sidepanel-visible'
        };
    },
    methods: {
        toggle() {
            if (!this.isActive) {
                this.isActive = true;
            } else {
                this.isActive = false;
            }
            console.log(this.isActive);
        },
    },

    created() {},
};
</script>

<style></style>
