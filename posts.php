<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="all.css">
    <script src="all.js"></script>
</head>

<body>
    <header>
        <!--NavBar Section-->
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="forums.php">Forums</a></li>
                    <li class="nav-item"><a href="posts.php">Posts</a></li>
                    <li class="nav-item"><a href="detail.php">Detail</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">Student Forum</div>
        </div>
        <!--SearchBox Section-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Everything">Everything</option>
                    <option value="Titles">Titles</option>
                    <option value="Descriptions">Descriptions</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>
    <div class="container">

        <!--Navigation-->
        <div class="navigate">
            <span><a href="">StudentForum - Forums</a> >> <a href="">Random Topic</a></span>
        </div>
        <!--Display posts table-->
        <div class="posts-table">
            <div class="table-head">
                <div class="status">Status</div>
                <div class="subjects">Subjects</div>
                <div class="replies">Replies/Views</div>
                <div class="last-reply">Last Reply</div>
            </div>
            <div class="table-row">
                <div class="status"><i class="fa fa-fire"></i></div>
                <div class="subjects">
                    <a href="">Is learning Python on 2023 worth it?</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Feb 2 2023
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>
            <div class="table-row">
                <div class="status"><i class="fa fa-frown-o"></i></div>
                <div class="subjects">
                    <a href="">Is learning Python on 2023 worth it?</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Feb 2 2023
                    <br>By <b><a href="">User</a></b>
                </div>
                </div>
                <div class="table-row">
                    <div class="status"><i class="fa fa-rocket"></i></div>
                    <div class="subjects">
                        <a href="">Is learning Python on 2023 worth it?</a>
                        <br>
                        <span>Started by <b><a href="">User</a></b> .</span>
                    </div>
                    <div class="replies">
                        2 replies <br> 125 views
                    </div>
    
                    <div class="last-reply">
                        Feb 2 2023
                        <br>By <b><a href="">User</a></b>
                    </div>
                    </div>
                    <div class="table-row">
                        <div class="status"><i class="fa fa-book"></i></div>
                        <div class="subjects">
                            <a href="">Is learning Python on 2023 worth it?</a>
                            <br>
                            <span>Started by <b><a href="">User</a></b> .</span>
                        </div>
                        <div class="replies">
                            2 replies <br> 125 views
                        </div>
        
                        <div class="last-reply">
                            Feb 2 2023
                            <br>By <b><a href="">User</a></b>
                        </div>
                        </div>
                        <div class="table-row">
                            <div class="status"><i class="fa fa-lock"></i></div>
                            <div class="subjects">
                                <a href="">Is learning Python on 2023 worth it?</a>
                                <br>
                                <span>Started by <b><a href="">User</a></b> .</span>
                            </div>
                            <div class="replies">
                                2 replies <br> 125 views
                            </div>
            
                            <div class="last-reply">
                                Feb 2 2023
                                <br>By <b><a href="">User</a></b>
                            </div>
                            </div>
                            <div class="table-row">
                                <div class="status"><i class="fa fa-fire"></i></div>
                                <div class="subjects">
                                    <a href="">Is learning Python on 2023 worth it?</a>
                                    <br>
                                    <span>Started by <b><a href="">User</a></b> .</span>
                                </div>
                                <div class="replies">
                                    2 replies <br> 125 views
                                </div>
                
                                <div class="last-reply">
                                    Feb 2 2023
                                    <br>By <b><a href="">User</a></b>
                                </div>
                                </div>
                                <div class="table-row">
                                    <div class="status"><i class="fa fa-fire"></i></div>
                                    <div class="subjects">
                                        <a href="">Is learning Python on 2023 worth it?</a>
                                        <br>
                                        <span>Started by <b><a href="">User</a></b> .</span>
                                    </div>
                                    <div class="replies">
                                        2 replies <br> 125 views
                                    </div>
                    
                                    <div class="last-reply">
                                        Feb 2 2023
                                        <br>By <b><a href="">User</a></b>
                                    </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="status"><i class="fa fa-fire"></i></div>
                                        <div class="subjects">
                                            <a href="">Is learning Python on 2023 worth it?</a>
                                            <br>
                                            <span>Started by <b><a href="">User</a></b> .</span>
                                        </div>
                                        <div class="replies">
                                            2 replies <br> 125 views
                                        </div>
                        
                                        <div class="last-reply">
                                            Feb 2 2023
                                            <br>By <b><a href="">User</a></b>
                                        </div>
                                        </div>
                                        <div class="table-row">
                                            <div class="status"><i class="fa fa-fire"></i></div>
                                            <div class="subjects">
                                                <a href="">Is learning Python on 2023 worth it?</a>
                                                <br>
                                                <span>Started by <b><a href="">User</a></b> .</span>
                                            </div>
                                            <div class="replies">
                                                2 replies <br> 125 views
                                            </div>
                            
                                            <div class="last-reply">
                                                Feb 2 2023
                                                <br>By <b><a href="">User</a></b>
                                            </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="status"><i class="fa fa-fire"></i></div>
                                                <div class="subjects">
                                                    <a href="">Is learning Python on 2023 worth it?</a>
                                                    <br>
                                                    <span>Started by <b><a href="">User</a></b> .</span>
                                                </div>
                                                <div class="replies">
                                                    2 replies <br> 125 views
                                                </div>
                                
                                                <div class="last-reply">
                                                    Feb 2 2023
                                                    <br>By <b><a href="">User</a></b>
                                                </div>
                                          </div>
        
        <!--Pagination-->
                <div class="pagination">
                    pages: <a href="#">1</a><a href="#">2</a><a href="#">3</a>

                </div>

                <!--Status Note-->

                <div class="note">
                    <span>
                        <i class="fa fa-frown-o"></i>&nbsp; 0 Engagement Topic <br>
                    </span>
                    <span>
                        <i class="fa fa-book"></i>&nbsp; Low Engagement Topic <br>
                    </span>
                    <span>
                        <i class="fa fa-fire"></i>&nbsp; Popular Topic <br>
                    </span>
                    <span>
                        <i class="fa fa-rocket"></i>&nbsp; high Engagement Topic <br>
                    </span>
                    <span>
                        <i class="fa fa-lock"></i>&nbsp; Closed Topic <br>
                    </span>


                </div>

        <footer>
            <span>&copy; &nbsp;Irfan Kazi | All rights Reserved.</span>
        </footer>
        <script src="main.js"></script>
    </body>
</html>