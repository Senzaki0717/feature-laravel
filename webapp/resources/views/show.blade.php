<h1>編集画面</h1>
<<form action="{{ route('register.edit', ['id' => $post->id]) }}" method="post">
    @csrf
    <div>
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{ $post->title }}">
    </div>


    <div>
        <label for="author_id">投稿者</label>
        <select name="author_id" id="">
            <option value="">選択してください</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}" {{ $author->id == $post->author_id ? 'selected' : '' }}>
                    {{ $author->author_name }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="content">本文</label>
        <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
    </div>

    <div>
        <button type="submit">送信</button>
    </div>
</form>