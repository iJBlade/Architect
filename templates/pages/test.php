<ul>
    <li><a class="cool-link" href="#">A cool link</a></li>
    <li><a class="cool-link" href="#">A cool link</a></li>
    <li><a class="cool-link" href="#">A cool link</a></li>
</ul>

<a class="cool-link" href="http://youtu.be/t9nQDdrPgZ0">Check out the associated YouTube Screencast!</a>
<style>
  li {
    margin-bottom: 10px;
}

.cool-link {
    display: inline-block;
    color: #000;
    text-decoration: none;
}

.cool-link::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #000;
    transition: width .3s;
}

.cool-link:hover::after {
    width: 100%;

}
</style>