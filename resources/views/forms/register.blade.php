@section('bottom_scripts')
    @parent
    <script src="assets/js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
@endsection

<div class="widget-author widget-register-form boxed">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <h2>Регистрация</h2>
            <p>Поля, отмеченные звездочкой, являются <strong>обязательными</strong> для заполнения.</p>

            <form class="form-horizontal" method="POST" enctype="application/x-www-form-urlencoded"
                  action="{{ route('auth.registerPost') }}">
                {{ csrf_field() }}
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissable form-group" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        <strong>Во время заполнения формы возникли ошибки!</strong><br>
                        Пожалуйста, исправьте их для завершения регистрации.
                    </div>
                @endif

                @if ($errors->has('email'))
                    <div class="form-group has-error">
                        @else
                            <div class="form-group">
                                @endif
                                <label class="col-sm-4 control-label">Адрес e-mail <span
                                            class="req-field">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" placeholder="user@domain.ru"
                                           value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="error-message">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            @if ($errors->has('password'))
                                <div class="form-group has-error">
                                    @else
                                        <div class="form-group">
                                            @endif
                                            <label class="col-sm-4 control-label">Ваш пароль <span
                                                        class="req-field">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="password"
                                                       value="{{ old('password') }}" placeholder="Придумайте пароль">
                                                @if ($errors->has('password'))
                                                    <span class="error-message">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        @if ($errors->has('password_confirmation'))
                                            <div class="form-group has-error">
                                                @else
                                                    <div class="form-group">
                                                        @endif
                                                        <label class="col-sm-4 control-label">Подтверждение пароля <span
                                                                    class="req-field">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input type="password" class="form-control"
                                                                   name="password_confirmation"
                                                                   value="{{ old('password_confirmation') }}"
                                                                   placeholder="Пароль еще раз">
                                                            @if ($errors->has('password_confirmation'))
                                                                <span class="error-message">{{ $errors->first('password_confirmation') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    @if ($errors->has('name'))
                                                        <div class="form-group has-error">
                                                            @else
                                                                <div class="form-group">
                                                                    @endif
                                                                    <label class="col-sm-4 control-label">Имя или
                                                                        никнейм </label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                               name="name" placeholder="Иван Иванов"
                                                                               value="{{ old('name') }}">
                                                                        @if ($errors->has('name'))
                                                                            <span class="error-message">{{ $errors->first('name') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                @if ($errors->has('phone'))
                                                                    <div class="form-group has-error">
                                                                        @else
                                                                            <div class="form-group">
                                                                                @endif
                                                                                <label class="col-sm-4 control-label">Мобильный
                                                                                    телефон</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="tel"
                                                                                           class="form-control"
                                                                                           id="register_phone"
                                                                                           name="phone"
                                                                                           placeholder="+375 (44) 123-45-67"
                                                                                           value="{{ old('phone') }}">
                                                                                    @error('phone')
                                                                                        <span class="error-message">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            @if ($errors->has('birthday'))
                                                                                <div class="form-group has-error">
                                                                                    @else
                                                                                        <div class="form-group">
                                                                                            @endif
                                                                                            <label class="col-sm-4 control-label">Дата
                                                                                                рождения</label>
                                                                                            <div class="col-sm-8">
                                                                                                <input type="date"
                                                                                                       class="form-control"
                                                                                                       id="register_birthday"
                                                                                                       name="birthday"
                                                                                                       value="{{ old('birthday')}}"
                                                                                                       min="1920-01-01"
                                                                                                       max="2014-12-31">
                                                                                                @error('birthday')
                                                                                                <span class="error-message">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                        @if ($errors->has('is_confirmed'))
                                                                                            <div class="form-group has-error">
                                                                                                @else
                                                                                                    <div class="form-group">
                                                                                                        @endif
                                                                                                        <div class="col-sm-offset-4 col-sm-8">
                                                                                                            <div class="checkbox">
                                                                                                                <label>
                                                                                                                    <input type="checkbox"
                                                                                                                           name="is_confirmed" {{ old('is_confirmed') ? 'checked' : '' }}><span
                                                                                                                            class="text-no-error">Согласен на хранение и обработку персональных данных</span></label>
                                                                                                                @if ($errors->has('is_confirmed'))
                                                                                                                    <br>
                                                                                                                    <br>
                                                                                                                    <span class="error-message">{{ $errors->first('is_confirmed') }}</span>
                                                                                                                @endif
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="col-sm-offset-2 col-sm-10">
                                                                                                            <button type="submit"
                                                                                                                    class="btn btn-primary">
                                                                                                                Зарегистрироваться
                                                                                                            </button>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            <button type="reset"
                                                                                                                    class="btn btn-gray">
                                                                                                                Очистить
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="push-down-30">
                                                                                                        Уже
                                                                                                        зарегистрированы?
                                                                                                        <a href="{{ route('auth.login') }}"
                                                                                                           style="cursor: pointer">Войти</a>
                                                                                                    </div>
                                                                                            </div>
                                                                                </div>
                                                                    </div>
                                                        </div>
                                            </div>
                                </div>
                    </div>
            </form>
        </div>
    </div>
</div>