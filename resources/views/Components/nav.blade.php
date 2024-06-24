<!--Making nav bar dynamic we are defining this in the current page -->
<nav>
    <a href="/" class="{{ $currentPage === 'home' ? 'active' : '' }}">Home Page</a>
    <a href="/about" class="{{ $currentPage === 'about' ? 'active' : '' }}">About Page</a>
    <a href="/contact" class="{{ $currentPage === 'contact' ? 'active' : '' }}">Contact Page</a>
</nav>
