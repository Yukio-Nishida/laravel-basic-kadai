<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
</head>

<body>
    <h2>フォームの入力内容</h2>
    <table>
        <tr>
            <th>タイトル</th>
            <td>{{ $title }}</td>
        </tr>
        <tr>
            <th>本文</th>
            <td>{{ $content }}</td>
        </tr>                              
    </table>

    <h2>その他のリクエスト情報</h2>
    <table>
        <tr>
            <th>HTTPリクエストメソッド</th>
            <td>{{ $method }}</td>
        </tr>
        <tr>
            <th>パス</th>
            <td>{{ $path }}</td>
        </tr>    
        <tr>
            <th>URL</th>
            <td>{{ $url }}</td>
        </tr>
        <tr>
            <th>クライアントのIPアドレス</th>
            <td>{{ $ip }}</td>
        </tr>                            
    </table>  
          
</body>

</html>
