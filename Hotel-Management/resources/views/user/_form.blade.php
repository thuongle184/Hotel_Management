@if($errors->any())
<div class="alert alert-danger">
  @foreach ($errors->all() as $error)
  <div>{!! $error !!}</div>
  @endforeach
</div>
@endif


<form
action="{!! $action !!}"
method="post"
enctype="multipart/form-data"
class="my-margin-top-40"
>
@csrf

@if($user['id'] != NULL)
@method('PATCH')
<input type="hidden" name="id" value="{!! $user['id'] !!}">
@endif 

<div class="row my-padding-bottom-19">
  <div class="col-md-3 col-lg-4 my-padding-bottom-8">
    <label for="user_user_type_id">User type:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="user_type_id" class="form-control" id="user_user_type_id">

        @foreach ($userTypes as $userType)
        <option
        value="{!! $userType['id'] !!}"
        {!!
          old (
          'user_type_id',
          isset($user) && $user['user_type_id'] == $userType['id'] ? 'selected' : NULL )
          !!}
          >
          {!! $userType['label'] !!}
        </option>
        @endforeach

      </select>
    </div>
  </div>
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="title_title_type_id">Title:<label>
      </div>

      <div class="col-md-9 col-lg-8 my-padding-bottom-8">
        <select name="title_id" class="form-control" id="title_title_type_id">

          @foreach ($titles as $title)
          <option
          value="{!! $title['id'] !!}"
          {!!
            old (
            'title_id',
            isset($title) && $title['title_id'] == $title['id'] ? 'selected' : NULL )
            !!}
            >
            {!! $title['label'] !!}
          </option>
          @endforeach

        </select>
      </div>
    </div>
    <div class="row my-padding-bottom-19">
      <div class="col-md-3 col-lg-4 my-padding-bottom-8">
        <label for="dish_name">First name:<label>
        </div>

        <div class="col-md-9 col-lg-8 my-padding-bottom-8">
          <input
          id="first_name"
          type="text"
          class="form-control"
          name="first_name"
          value="{!! old ('first_name',isset($user)?$user['first_name']:NULL) !!}"
          >
        </div>
      </div>
      <div class="row my-padding-bottom-19">
        <div class="col-md-3 col-lg-4 my-padding-bottom-8">
          <label for="dish_name">Middle name:<label>
          </div>

          <div class="col-md-9 col-lg-8 my-padding-bottom-8">
            <input
            id="middle_name"
            type="text"
            class="form-control"
            name="middle_name"
            value="{!! old ('middle_name',isset($user)?$user['middle_name']:NULL) !!}"
            >
          </div>
        </div>
        <div class="row my-padding-bottom-19">
          <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="dish_name">Last name:<label>
            </div>

            <div class="col-md-9 col-lg-8 my-padding-bottom-8">
              <input
              id="last_name"
              type="text"
              class="form-control"
              name="last_name"
              value="{!! old ('last_name',isset($user)?$user['last_name']:NULL) !!}"
              >
            </div>
          </div> 
          <div class="row my-padding-bottom-19">
            <div class="col-md-3 col-lg-4 my-padding-bottom-8">
              <label for="user_name">User name:<label>
              </div>

              <div class="col-md-9 col-lg-8 my-padding-bottom-8">
                <input
                id="user_name"
                type="text"
                class="form-control"
                name="user_name"
                value="{!! old ('user_name',isset($user)?$user['user_name']:NULL) !!}"
                >
              </div>
            </div> 
            <div class="row my-padding-bottom-19">
              <div class="col-md-3 col-lg-4 my-padding-bottom-8">
                <label for="DOB">Day of Birth:<label>
                </div>

                <div class="col-md-9 col-lg-8 my-padding-bottom-8">
                  <input
                  id="DOB"
                  type="date"
                  class="form-control"
                  name="DOB"
                  value="{!! old ('DOB',isset($user)?$user['DOB']:NULL) !!}"
                  >
                </div>
              </div> 



              <div class="row my-padding-bottom-19">
                <div class="col-md-3 col-lg-4 my-padding-bottom-8">
                  <label for="dish_description">Address:<label>
                  </div>

                  <div class="col-md-9 col-lg-8 my-padding-bottom-8">
                    <textarea
                    rows="4"
                    id="address"
                    class="form-control"
                    name="address"
                    >{!! old ('address',isset($user)?$user['address']:NULL) !!}</textarea>
                  </div>
                </div>
                <div class="row my-padding-bottom-19">
                  <div class="col-md-3 col-lg-4 my-padding-bottom-8">
                    <label for="dish_name">Email:<label>
                    </div>

                    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
                      <input
                      id="email"
                      type="email"
                      class="form-control"
                      name="email"
                      value="{!! old ('email',isset($user)?$user['email']:NULL) !!}"
                      >
                    </div>
                  </div> 

                  <div class="row my-padding-bottom-19">
                    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
                      <label for="dish_price">Phone:<label>
                      </div>

                      <div class="col-md-9 col-lg-8 my-padding-bottom-8">
                        <input
                        id="phone"
                        type="number"
                        class="form-control"
                        name="phone"
                        value="{!! old ('phone',isset($user)?$user['phone']:NULL) !!}"
                        >
                      </div>
                    </div>
                    <div class="row my-padding-bottom-19">
                      <div class="col-md-3 col-lg-4 my-padding-bottom-8">
                        <label for="title_title_type_id">Country:<label>
                        </div>

                        <div class="col-md-9 col-lg-8 my-padding-bottom-8">
                          <select name="country_id" class="form-control" id="country_country_type_id">

                            @foreach ($countries as $country)
                            <option
                            value="{!! $country['id'] !!}"
                            {!!
                              old (
                              'country_id',
                              isset($country) && $country['country_id'] == $country['id'] ? 'selected' : NULL )
                              !!}
                              >
                              {!! $country['label'] !!}
                            </option>
                            @endforeach

                          </select>
                        </div>
                      </div>
                      <div class="row my-padding-bottom-19">
                        <div class="col-md-3 col-lg-4 my-padding-bottom-8">
                          <label for="title_title_type_id">Identification:<label>
                          </div>

                          <div class="col-md-9 col-lg-8 my-padding-bottom-8">
                            <select name="title_id" class="form-control" id="identification_identification_type_id">

                              @foreach ($identificationTypes as $identificationType)
                              <option
                              value="{!! $identificationType['id'] !!}"
                              {!!
                                old (
                                'identificationType_id',
                                isset($identificationType) && $identificationType['identificationType_id'] == $identificationType['id'] ? 'selected' : NULL )
                                !!}
                                >
                                {!! $identificationType['label'] !!}
                              </option>
                              @endforeach

                            </select>
                          </div>
                        </div>
                        <div class="row my-padding-bottom-19">
                          <div class="col-md-3 col-lg-4 my-padding-bottom-8">
                            <label for="information">Information:<label>
                            </div>

                            <div class="col-md-9 col-lg-8 my-padding-bottom-8">
                              <input
                              id="information"
                              type="text"
                              class="form-control"
                              name="information"
                              value="{!! old ('information',isset($user)?$user['information ']:NULL) !!}"
                              >
                            </div>
                          </div> 

                          <div class="row">
                            <div class="col-md-3 col-lg-4"></div>

                            <div class="col-md-9 col-lg-8">
                              <div class="d-none my-margin-bottom-19" id="my-dish-discard-picture-status"></div>
                            </div>
                          </div>





                          <!-- button Save -->
                          <div class="row">
                            <div class="col-md-3 col-lg-4"></div>

                            <div class="col-md-9 col-lg-8">
                              <a
                              href="{!! route('users.index') !!}"
                              class="btn btn-sm btn-outline-dark my-margin-right-8 my-margin-bottom-8"
                              >
                              <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
                              <span>Back to list of users</span>
                            </a>

                            <button
                            type="submit"
                            class="btn btn-sm btn-success my-margin-bottom-8"
                            >
                            <i class="fas fa-check-circle my-margin-right-12"></i>
                            <span>Save</span>
                          </button>
                        </div>
                      </div>

                    </form>