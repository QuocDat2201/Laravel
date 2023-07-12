<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('user/css/style4.css')}}">
    <title>Profile</title>
</head>
<body>
    <div class="water-border">
    </div>
    <form action="{{url('user/edit')}}">
    <div class="container">
            <div class="top-header">
                <header>{{session('username')}}'Profile</header>
            </div>
            <div class="input-field">
                <lable for="name">Name :</lable>
                <input type="text" name="name" id="input1" value="{{ $user[0]->name }}" onfocus="handleInputFocus(this)" onblur="handleInputBlur(this)" data-default="{{ $user[0]->name }}">
                <i class='bx bx-expand-horizontal' ></i>
            </div>
            <div class="input-field">
                <lable for="address">Address :</lable>
                <textarea type="text" name="address" class="hide-scrollbar" id="input3" onfocus="handleInputFocus(this)" onblur="handleInputBlur(this)" >{{ $user[0]->address }}</textarea>
                <i class='bx bx-location-plus' ></i>
            </div>
            <div class="input-field">
                <lable for="email">Email :</lable>
                <input type="email" name="email" id="input4" value=" {{ $user[0]->email }}"  onfocus="handleInputFocus(this)" onblur="handleInputBlur(this)" data-default=" {{ $user[0]->email }}">
                <i class='bx bx-envelope' ></i>
            </div>
            <div class="input-field">
                <lable for="phone">Phone :</lable>
                <input type="text" name="phone" id="input5" value=" {{ $user[0]->phone }}"  onfocus="handleInputFocus(this)" onblur="handleInputBlur(this)" data-default=" {{ $user[0]->phone }}">
                <i class='bx bx-phone' ></i>
            </div>
            <div class="input-field">
                <div class="water-submit">
                    <button type="submit" class="submit" name="update" value="{{$user[0]->id}}">Update</button>
                </div>
            </div>
        </div> 
    </form>
</body>
    <script>
      var textareaValue = document.getElementById("input3").value;
      function handleInputFocus(input) {
        if (input.value === input.getAttribute('data-default')) {
          input.value = input.getAttribute('data-default');
        }
      }
      
      function handleInputBlur(input) {
        if (input.value ==='' || input.value ===input.getAttribute('data-default')) {
          input.value = input.getAttribute('data-default');
        }
      }
      const textarea = document.getElementById('input3');

      textarea.addEventListener('scroll', function() {
        textarea.classList.remove('hide-scrollbar');
      });
      
      textarea.addEventListener('mouseleave', function() {
        textarea.classList.add('hide-scrollbar');
      });
    </script>
</html>