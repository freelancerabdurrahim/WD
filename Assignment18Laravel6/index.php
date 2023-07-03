
task No-1 
ans:

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}



task No-2 
ans:

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    // Define relationships
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}



Task No 3:
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
}



Task No 4: 
answer:
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // ...

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // ...

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}




Task No 5 
answer:
foreach ($posts as $post) {
    echo "Post Title: " . $post->title . "<br>";
    echo "Post Content: " . $post->content . "<br>";
    echo "Post Category: " . $post->category->name . "<br>";
    echo "<br>";
}

Task No-6 
Answer:
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // ...

    public static function getPostsCount($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }
}




Taks No -7 
answer:
use App\Http\Controllers\PostController;

Route::delete('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');



namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}




Task No-8 
answer:
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    // ...

    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
}


To use this method, you can call it as follows:

$softDeletedPosts = Post::getSoftDeletedPosts();

Task No-9 
answer:

<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


use App\Models\Post;

public function index()
{
    $posts = Post::with('category')->get();

    return view('posts', compact('posts'));
}



Task No-10:
answer:
use App\Http\Controllers\CategoryController;

Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts'])->name('categories.posts');



namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function getPosts($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;

        return view('category.posts', compact('category', 'posts'));
    }
}





Task No-11 
answer:
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // ...

    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
}




$category = Category::find(1);
$latestPost = $category->latestPost;





Task No-12 
answer:

<!DOCTYPE html>
<html>
<head>
    <title>Latest Posts for Each Category</title>
</head>
<body>
    <h1>Latest Posts for Each Category</h1>

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>

        @if ($category->latestPost)
            <h3>{{ $category->latestPost->title }}</h3>
            <p>{{ $category->latestPost->content }}</p>
        @else
            <p>No posts found for this category.</p>
        @endif

        <hr>
    @endforeach
</body>
</html>









use App\Models\Category;

public function index()
{
    $categories = Category::with('latestPost')->get();

    return view('latest_posts', compact('categories'));
}