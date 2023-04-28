<template>
    <Header :users = "user"></Header>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div
                    class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration"
                    role="alert"
                >
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            <h3 class="mb-3">


                            </h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div>
                                       Laravel Blog Uygulaması | {{ user.name }}
                                    </div>
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <a
                                        class="btn app-btn-primary"
                                           href="/"
                                        ><svg
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 16 16"
                                            class="bi bi-file-earmark-arrow-down mr-2"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"
                                            />
                                            <path
                                                d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z"
                                            /></svg >Anasayfa </a
                                    >
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            
                        </div>
                        <!--//app-card-body-->
                    </div>
                    <!--//inner-->
                </div>
                <!--//app-card-->

                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <!-- <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Toplam Blog</h4>
                                <div class="stats-figure">Blog Sayısı</div>
                                <div class="stats-meta text-success">
                                    <svg
                                        width="1em"
                                        height="1em"
                                        viewBox="0 0 16 16"
                                        class="bi bi-arrow-up"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"
                                        />
                                    </svg>
                                   Blog Sayısı 
                                </div>
                            </div> -->
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    


                   
                    <!--//col-->
                    
                    <!--//col-->
                </div>
                <!--//row-->
            
                <!--//row-->
            </div>
            <!--//container-fluid-->
        </div>
    </div><router-view/>
    <Footer></Footer>

    

    
</template>

<script>
import Header from "../Admin/layouts/Header.vue";
import Footer from "../Admin/layouts/Footer.vue";




export default {

    props: ['user'],

    data() {
        
         return {


              users: { status: "", id:''}

              

      
         }

    },
    components: {
        Header,
        Footer,
       


       
    },

    created() {

  
        this.users.status = this.user.status,
        this.users.id = this.user.id,
       
        console.log(this.users);
    }


   

      


          
       
};
</script>
