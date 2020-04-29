<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::route()->getName() === 'about' ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::route()->getName() === 'contact' ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::route()->getName() === 'get-messages' ? 'active' : '' }}" href="/contact/messages">See Messages</a>
        </li>
      </ul>
    </div>
  </nav>
