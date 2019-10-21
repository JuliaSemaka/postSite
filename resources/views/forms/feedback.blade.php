<div class="boxed push-down-45">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="contact">
                <h2>{{ $title ?? '' }}</h2>
                <p class="contact__text">Напишите мне. И я обязательно вам отвечу!</p>
                <form method="POST" action="{{ route('main.feedbackPost') }}" enctype="application/x-www-form-urlencoded">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12">
                            @if ($errors->has('name'))
                                <span class="error-message">*{{ $errors->first('name') }}</span>
                            @endif
                            <input type="text" placeholder="Ваше имя *" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="col-xs-12">
                            @if ($errors->has('email'))
                                <span class="error-message">*{{ $errors->first('email') }}</span>
                            @endif
                            <input type="text" placeholder="E-mail *" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-xs-12">
                            @if ($errors->has('message'))
                                <span class="error-message">*{{ $errors->first('message') }}</span>
                            @endif
                            <textarea rows="6" type="text" placeholder="Ваше сообщение *" name="message">{{ old('message') }}</textarea>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                            <span class="contact__obligatory">Поля помеченные * обязательно заполнить</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>