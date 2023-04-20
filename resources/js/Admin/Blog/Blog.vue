<template>
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div
                class="row g-3 mb-4 align-items-center justify-content-between"
            >
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Blog Yazılarım</h1>
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
						<button type="button" class="btn btn-success">Blog Oluştur</button>
                        <div class="app-card-body">
							
                            <div class="table-responsive">
							

                                <table
                                    class="table app-table-hover mb-0 text-left"
                                >
                                    <thead>
                                        <tr>
                                            <th class="cell">id</th>
                                            <th class="cell">Başlık</th>
                                            <th class="cell">İçerik</th>
                                            <th class="cell">Tarih</th>
                                            <th class="cell">Aksiyonlar</th>

                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="blog in result"
                                            :key="blog.id"
                                        >
                                            <td class="cell">{{ blog.id }}</td>
                                            <td class="cell">
                                                <span class="truncate"
                                                    >{{ blog.id }}
                                                    {{ blog.title }}</span
                                                >
                                            </td>
                                            <td class="cell">
                                                {{ blog.description }}
                                            </td>
                                            <td class="cell">
                                                <span>{{
                                                    blog.created_at
                                                }}</span
                                                ><span class="note">{{
                                                    blog.status
                                                }}</span>
                                            </td>

                                            <td class="cell">
                                                <a @click="remove(blog)"   class="btn-sm app-btn-secondary"
                                                    href="#"
                                                    >Sil</a
                                                >
                                            </td>
                                            <td class="cell">
                                                <a
                                                    class="btn-sm app-btn-primary"
                                                    href="#"
                                                    >Düzenle</a
                                                >
                                            </td>
											
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--//table-responsive-->
                        </div>
                        <!--//app-card-body-->
                    </div>
                    <!--//app-card-->
                    <nav class="app-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a
                                    class="page-link"
                                    href="#"
                                    tabindex="-1"
                                    aria-disabled="true"
                                    >Previous</a
                                >
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <!--//app-pagination-->
                </div>
                <!--//tab-pane-->
            </div>
            <!--//tab-content-->
        </div>
        <!--//container-fluid-->
    </div>
</template>

<script>
export default {
    name: "blog",

    data() {
        return {
            result: {},

            blog: {
                title: "",
                description: "",

                status: "",
                created_at: "",
            },

            durum: false,
        };
    },

    created() {
        this.blogView();
    },

    methods: {
        blogView() {
            let page = "http://localhost:8000/api/bloglarim";

            axios.get(page).then(({ data }) => {
                console.log(data);

                this.result = data;
            });
        },

		save() {
            if (this.blog.id == "") {
                this.saveData();
            } 
        },

        saveData() {
            axios
                .post("http://127.0.0.1:8000/api/save", this.blog)
                .then(({ data }) => {
                    alert("Savedd");
                    this.employeeView();
                });
        },

        remove(blog) {
            var url = "http://localhost:8000/api/delete/" + blog.id;

            axios.delete(url);

            this.blogView();
        },
    },
};
</script>

<style></style>
