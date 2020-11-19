<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">หน้าแรก</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">หมวดหมู่</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{URL::to('tasks')}}">All task <span class="sr-only">(current)</span></a>
                    <a class="dropdown-item" href="{{URL::to('tasks/create')}}">Add task <span class="sr-only">(current)</span></a>
                    <a class="dropdown-item" href="https://www.anime-suba.com/อนิเมะพากย์ไทย">อนิเมะพากย์ไทย</a>
                    <a class="dropdown-item" href="https://www.anime-suba.com/อนิเมะซับไทย">อนิเมะซับไทย</a>
                    <a class="dropdown-item" href="https://www.anime-suba.com/อนิเมะจบแล้ว">อนิเมะจบแล้ว</a>
                    <a class="dropdown-item" href="https://www.anime-suba.com/อนิเมะยังไม่จบ">อนิเมะยังไม่จบ</a>
                    <a class="dropdown-item" href="https://www.anime-suba.com/อนิเมะจีน">อนิเมะจีน</a>
                    <a class="dropdown-item" href="https://www.anime-suba.com/the-movie-ova">The Movie/OVA</a>
                    <a class="dropdown-item" href="https://www.anime-suba.com/Animeทั้งหมด">อนิเมะทั้งหมด</a>
                </div>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <form autocomplete="off" action="#" method="get" enctype="multipart/from-data">
                <input id="search" class="form-control mr-sm-2" type="text" name="value" placeholder="Search" aria-label="Search"></input>
                <button type="submit" name="search" class="btn btn-success">ค้นหา</button>
            </form>
        </div>
        </div>
    </div>
</nav>
