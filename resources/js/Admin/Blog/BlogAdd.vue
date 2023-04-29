<template>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Blog Yazısı Ekle</h1>
                <hr class="mb-4" />
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">
                            Bu Kısımdan Blog Yazısı Ekleyebilirsiniz 
                        </h3>
                        <!-- <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet,
          consectetur adipiscing elit. <a href="/help">Learn more</a></div> -->
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <form
                                    @submit.prevent="save()"
                                    class="settings-form"
                                >
                                    <div class="mb-3">
                                        <label
                                            for="setting-input-2"
                                            class="form-label"
                                            >Başlık </label
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
                                            for="setting-input-3"
                                            class="form-label"
                                            >Yayınlama Tarihi</label
                                        ><br />
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
                                        Kaydet 
                                    </button>
                                   
                                </form>
                          
                             
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                </div>
                <!--//row-->
                <hr class="my-4" /> 
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
    </div>
    
     
  
    <!--//app-wrapper-->
</template>

<script>
import axios from "axios";


export default {
    name: "blog-ekle",
     
  components: {
       
    axios,
  

  },
 
    
    //   components: {
    //      Main

    //   },
   
    data() {
        return {
            user: {},

        

            blog: {
                title: "",
                description: "",
                date: "",
                slug: "",
                
               
                
            },

           

            durum: false,
        };
    },
    created() {

         
   this.blogView();
       

   console.log(this.result)

    }, 
   
 
    methods: {

        blogView() {
            let page = "/user/data" ;

            axios.get(page).then(({ data }) => {
                console.log(data);

                this.user = data;
            });
        },
      
        save() {
            this.saveData();
        },
        saveData() {
            axios
                .post("/post" , this.blog)
                .then(({ data }) => {
                    alert("Blog Kaydedildi");
                })
                .then((response) => {
                    this.$router.push({ name: "blog" , params: {id: this.user.id}}).catch((error) => {
                        console.log(error + "Blog Oluşturulamadı.");
                    });
                });
        },

    },
};
</script>

<style></style>
