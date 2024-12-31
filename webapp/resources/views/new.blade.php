<h1>新規作成画面</h1>
<form action="{{ route('store.post') }}" method="post">
    @csrf
    <div>
        <label for="title">タイトル</label>
        <input type="text" name="title" id="title" placeholder="タイトルを入力してください">
    </div>

    <div>
        <label for="author_id">投稿者</label>
        <select name="author_id" id="">
            <option value="">選択してください</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->author_name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="content">本文</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="本文を入力してください"></textarea>
    </div>

    <div>
        <button type="submit">送信</button>
    </div>
</form>
