@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <?php print_r($contact['name']) ?>
    <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">

                <!--お名前-->

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                    </td>
                </tr>

                <!--性別-->

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                    </td>
                </tr>

                <!--メールアドレス-->

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>

                <!--郵便番号-->

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">郵便番号</th>
                    <td class="confirm-table__text">
                        <input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly />
                    </td>
                </tr>

                <!--住所-->

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>

                <!--建物名-->

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly />
                    </td>
                </tr>

                <!--ご意見-->

                <tr class="confirm-table__row">
                    <th class="confirm-table__header">ご意見</th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>

        <!--送信ボタン-->

        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>

        <!--修正する-->
        <div>
            <a href="/src/resources/views/index.blade.php" class="modify">修正する</a>
        </div>

    </form>
</div>
@endsection