<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">TodoList</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
               <li class={{ Request::is('/') ? 'active' : '' }}><a href="/">Home</a></li>
               <li class={{ Request::is('/todo/create') ? 'active' : '' }}><a href="/todo/create">Create Todo</a></li>
           </ul>
        </div>
    </div>
   </nav>