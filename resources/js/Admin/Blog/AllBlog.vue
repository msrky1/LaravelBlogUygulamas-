<template>
  <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div
                class="row g-3 mb-4 align-items-center justify-content-between"
            >
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Tüm Bloglar</h1>
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
                                  
                                </form>
                            </div>
                    
                        </div>
                
                    </div>
               
                </div>
            
            </div>
     

       

            <div class="tab-content" id="orders-table-tab-content">
                <div
                    class="tab-pane fade show active"
                    id="orders-all"
                    role="tabpanel"
                    aria-labelledby="orders-all-tab"
                >
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                    
                        
                        <router-link :to="{ name: 'blog-ekle' }">
                            <button type="button" class="btn btn-success">
                                Blog Oluştur
                            </button>
                        </router-link>
                        
                         
                           
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
                                            <th class="cell">
                                                Yayınlama Tarihi
                                            </th>
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
                                                <span class="truncate">
                                                    {{ blog.title }}</span
                                                >
                                            </td>
                                            <td class="cell">
                                                {{ blog.description }}
                                            </td>
                                            <td class="cell">
                                                <span>
                                                    {{ blog.date }} </span
                                                ><span class="note">{{
                                                    blog.status
                                                }}</span>
                                            </td>

                                            <td class="cell">
                                                <a
                                                    @click="remove(blog)"
                                                    class="btn-sm app-btn-secondary"
                                                    href="#"
                                                    >Sil</a
                                                >
                                            </td>
                                            <td class="cell">
                                                <input
                                                    type="button"
                                                    @click="edit(blog)"
                                                    value="Düzenle"
                                                    class="btn-sm app-btn-primary"
                                                />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                       
                        </div>
                     
                    </div>

              
                    
                </div>
         
            </div>
          

            <div class="app-wrapper">
                <div class="app-content pt-3 p-md-3 p-lg-4">
                    <div v-if="isActive" class="container-xl">
                        <h1 class="app-page-title">Blog Yazısını Düzenle</h1>
                        <hr class="mb-4" />
                        <div class="row g-4 settings-section">
                            <div class="col-12 col-md-8">
                                <div
                                    class="app-card app-card-settings shadow-sm p-4"
                                >
                                    <div class="app-card-body">
                                        <form
                                            @submit.prevent="updateBlog()"
                                            class="settings-form"
                                        >
                                            <div class="mb-3">
                                                <label
                                                    for="setting-input-2"
                                                    class="form-label"
                                                    >Başlık</label
                                                >
                                                <input
                                                    name="title"
                                                    type="text"
                                                    class="form-control"
                                                    v-model="blog.title"
                                                    required
                                                />
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    for="setting-input-3"
                                                    class="form-label"
                                                    >İçerik</label
                                                ><br />
                                                <textarea
                                                    name="description"
                                                    class="form-control"
                                                    v-model="blog.description"
                                                    rows="10"
                                                    cols="50"
                                                ></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    for="setting-input-2"
                                                    class="form-label"
                                                    >Paylaşım Tarihi</label
                                                >
                                                <input
                                                    name="title"
                                                    type="date"
                                                    class="form-control"
                                                    v-model="blog.date"
                                                    required
                                                />
                                            </div>
                                            <button
                                                type="submit"
                                                class="btn btn-primary"
                                            >
                                                Güncelle
                                            </button>
                                        </form>
                                    </div>
                                
                                </div>
                             
                            </div>

                            
                            <hr class="my-4" />
                        </div>

                     
                    </div>
                </div>
            
            </div>
        </div>
       
    </div>
</template>

<script>
export default {
    data() {
        return {
            result: {},

            blog: {
                title: "",
                description: "",
                date: "",
                user_id: "",

            },
            user: {
                id: "",
            },
            isActive: false,
            durum: false,
        };
    },

 created() {

     this.allBlog();
     

 },
    methods: {
        allBlog() {
            let page =
                "/api/all/blog/";

            axios.get(page).then(({ data }) => {
                console.log(data);

                this.result = data;
            });
        },

        updateBlog() {
            var editrecords =
                "/api/update/" + this.blog.id;
            axios
                .put(editrecords, this.blog)

                .then(({ data }) => {
                    this.blog.title = "";
                    this.blog.description = "";
                    this.blog.date = "";
                    this.user_id = "";

                    alert("updated!!");

                    this.isActive = false;

                    this.allBlog();
                });
        },

        edit(blog) {
            this.blog = blog;
            this.isActive = true;
          
        },

        remove(blog) {
            var url = "/api/delete/" + blog.id;

            axios.delete(url);

            this.allBlog();
        },
    },
}
</script>

<style>

</style>