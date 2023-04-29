<template>
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div
                class="row g-3 mb-4 align-items-center justify-content-between"
            >
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Kullanıcılar</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div
                            class="row g-2 justify-content-start justify-content-md-end align-items-center"
                        >
                            <div class="col-auto">
                                <form
                                    class="table-search-form row gx-1 align-items-center"
                                >
                                    <!-- <div class="col-auto">
                     <input type="text" id="search-orders" name="searchorders"
                       class="form-control search-orders" placeholder="Search">
                   </div> -->
                                </form>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//table-utilities-->
                </div>
                <!--//col-auto-->
            </div>
            <!--//row-->

            <!-- <nav id="orders-table-tab"
         class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
         <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-toggle="tab"
           href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
         <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-toggle="tab"
           href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
         <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-toggle="tab"
           href="#orders-pending" role="tab" aria-controls="orders-pending"
           aria-selected="false">Pending</a>
         <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-toggle="tab"
           href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
           aria-selected="false">Cancelled</a>
       </nav> -->

            <div class="tab-content" id="orders-table-tab-content">
                <div
                    class="tab-pane fade show active"
                    id="orders-all"
                    role="tabpanel"
                    aria-labelledby="orders-all-tab"
                >
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table
                                    class="table app-table-hover mb-0 text-left"
                                >
                                    <thead>
                                        <tr>
                                            <th class="cell">Kullanıcı Adı</th>
                                            <th class="cell">Statüsü</th>

                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="user in result"
                                            :key="user.id"
                                        >
                                            <td class="cell">
                                                {{ user.name }}
                                            </td>
                                            <td class="cell">
                                                <span class="truncate">
                                                    {{ user.status }}</span
                                                >
                                            </td>

                                            <button
                                                @click="edit(user)"
                                                type="submit"
                                                class="btn btn-warning"
                                            >
                                                Düzenle
                                            </button>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="app-wrapper">
                                <div class="app-content pt-3 p-md-3 p-lg-4">
                                    <div v-if="isActive" class="container-xl">
                                        <div class="row g-4 settings-section">
                                            <div class="col-12 col-md-8">
                                                <div
                                                    class="app-card app-card-settings shadow-sm p-4"
                                                >
                                                    <div class="app-card-body">
                                                        <form
                                                            @submit.prevent="
                                                                updateUser()
                                                            "
                                                            class="settings-form"
                                                        >
                                                            <div class="mb-3">
                                                                <label
                                                                    for="setting-input-2"
                                                                    class="form-label"
                                                                    >Kullanıcı
                                                                    Adı</label
                                                                >
                                                                <input
                                                                    name="title"
                                                                    type="text"
                                                                    class="form-control"
                                                                    v-model="
                                                                        user.name
                                                                    "
                                                                    required
                                                                />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label
                                                                    for="setting-input-3"
                                                                    class="form-label"
                                                                    >Statüsü</label
                                                                ><br />
                                                                <select v-model="user.status"
                                                                    class="form-select"
                                                                    aria-label="Default select example"
                                                                >
                                                                    <option
                                                                       
                                                                    >
                                                                       admin
                                                                    </option>
                                                                    <option
                                                                        value="user"
                                                                    >
                                                                        user
                                                                    </option>
                                                                    <option
                                                                        value="pasif"
                                                                    >
                                                                        pasif
                                                                    </option>
                                                                   
                                                                </select>
                                                            </div>
                                                            <button
                                                                type="submit"
                                                                class="btn btn-primary"
                                                            >
                                                                Güncelle
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <!--//app-card-body-->
                                                </div>
                                                <!--//app-card-->
                                            </div>

                                            <!--//row-->
                                            <hr class="my-4" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--//table-responsive-->
                        </div>
                        <!--//app-card-body-->
                    </div>
                    <!--//app-card-->

                    <!--//app-pagination-->
                </div>
                <!--//tab-pane-->
            </div>
            <!--//tab-content-->

            <div class="app-wrapper">
                <!--//app-content-->
            </div>
        </div>
        <!--//container-fluid-->
    </div>
</template>

<script>
export default {
    name: "users",

    data() {
        return {
            result: {},

            user: {
                name: "",
                status: "",
            },
            isActive: false,
        };
    },

    created() {
        this.userView();
    },

    methods: {
        userView() {
            let page = "/api/user";

            axios.get(page).then(({ data }) => {
                console.log(data);

                this.result = data;
            });
        },

        edit(user) {
            this.user = user;
            this.isActive = true;
            console.log(this.isActive);
        },

        updateUser() {
            // console.log(users.id)

            var editrecords = "/api/user/" + this.user.id;
            axios
                .put(editrecords, this.user)

                .then(({ data }) => {
                    this.user.name = "";
                    this.user.status = "";

                    alert("Güncelleme Başarılı!!");

                    this.isActive = false;

                    this.userView();
                });
        },
    },
};
</script>

<style></style>
