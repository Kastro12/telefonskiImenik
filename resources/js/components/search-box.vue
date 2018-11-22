<template>
    <div class="search-div">
        <!-- <i id="search-icon" class="fas fa-search"></i> -->
        <input @keyup="search_posts" type="text" id="search-bar" placeholder="Search...">
        <div class="search-result">
            <div v-for="search_result in search_results" :key="search_result.id" class="single-result">
                <!--<a :href="'article/'+search_result.id">-->
                    <div class="single-result-inner">
<div class="search-title">{{search_result.ime}} {{search_result.prezime}}<br/>
    {{search_result.grad}} {{search_result.ulica}} {{search_result.broj}}<br/>
    {{search_result.telefonski_broj}}
    <hr>
</div>
                    </div>
                <!--</a>-->
            </div>
        </div>
    </div>
</template>
<script>
    import jquery from 'jquery';
    // $(document).ready(function(){
    //     $('#search-icon').click(function(){
    //        $('')
    //     });
    // });
    export default{
        data(){
            return{
                //posts:[],
                search_results:[]
            }
        },
        methods:{
            search_posts(){
                let search = $('#search-bar').val();
                if(!search){
                }
                else{
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:'/ti/public/search',
                        method:'GET',
                        data:{
                            'search':search
                        },
                        success:(search_results)=>{
                            this.search_results = search_results;
                            $('#search-bar').focus(function(){
                                $('.search-result').removeClass('hide-search');
                            });
                            $('#main-div').click(function(){
                                $('.search-result').addClass('hide-search');
                            });
                            //console.log(search_results);
                        },
                        error:()=>{
                            // console.log('error');
                        }
                    })
                }
            }
        }
    }
</script>
<style>
</style>