## Websites and apps...

Simple project demonstrating Web 1.0 vs Web 2.0 practices.

## TODO

### Posts list

We want to have posts on this blog !  
However we need them both on the website and the app...

We added at your disposal:
- A new `get_posts` function in `common/post.php`, returning the posts list
- A new http api using json to fetch posts with a GET request to `api/posts.php`

Each post has two properties: `title` and `body`.

A minimal html representation of a post in a list could be:
```html
<!-- Using {{ }} notation to represent dynamic content -->
<li>
  <h3>{{post.title}}</h3>
  <p>{{post.body}}</p>
</li>
```

**Website**

Complete the posts page with a list of our posts.

**App**

On login success, replace our `main` content with a list of the posts.


## Refactor

Take some time to make all of this code a little more dry...  
One target could be the duplicate html needed for each page of our website.

Be ingenious  !

### Single post pages

We would like to have dedicated pages for each of our posts.

**Website**

We need dynamic URLs for this. We would like our posts to be available under `http://<oursite>/post/1` for exemple, for the post with id: 1.  
We need URL rewriting to achieve this.

Hints: Think Apache...

**App**

A modal of some kind could do the job. But we will need a more maintainable solution, and possibly dynamic URLs as well.

Hints: Think SPA...

### Security

Find a way to store this password more securely, at least !

### Content writing

#### FileSystem
We could use Markdown...  
And why not front-matters...

Hints (others could be found aswell) :  
[Parsedown | Markdown Parser in PHP](https://parsedown.org/)  
[yaml-front-matter | To the point front matter parser](https://github.com/spatie/yaml-front-matter)

#### DataBase

We could also use a database... ;)