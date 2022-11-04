<style>
    #search-box-mobile{
        display: none;
        padding: 20px;
        text-align: center;
        z-index: 10;
        background: #fff;
        position: relative;
    }
    #search-box-mobile input{
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 15px;
    }
    #submit-searchbox-mobile-btn{
        text-transform: uppercase;
        padding: 10px;
        border-radius: 50px;
        width: 150px;
        border: none;
        background-image: linear-gradient(#dc3545, #dc3545, #dc3545);
        color: #fff;
        font-weight: bold;
        height: 55px;
    }
    @media(max-width: 768px){
        #search-box-mobile{
            display: block;
        }
    }
</style>

<div id="search-box-mobile">
    <form action="search" method="get">
        <input class="form-control" type="search" name="keyword" placeholder="PROJECT NAME">
        <button id="submit-searchbox-mobile-btn" type="submit">SEARCH</button>
        {{ csrf_field() }}
    </form>
</div>