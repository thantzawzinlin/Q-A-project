                    @csrf
                        <div class="form-group">
                           <label for="question_title">Question Title</label>
                           <input type="text" name="title" value="{{old('title',$question->title) }}" id="question_title" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="question_body">Question Title</label>
                           <textarea name="body" id="question_body"  cols="30" rows="10" class="form-control">{{old('body',$question->body)}}</textarea>
                          
                        </div>
                        <div class="form-group">
                           
                           <button type="submit" class="btn btn-success">{{ $buttonName }}</button>
                        </div>