<div class="row">
    @forelse($reviews as $review)
    <div class="review">
        <div class="transaction-title">
            {{App\Product::where('id',$review->product_id)->first()->title}}
        </div>
        <div class="transaction-rating">
            @if($review->transaction_type == 0)
                <span class="fa fa-plus"></span>
            @else
                <span class="fa fa-minus"></span>
            @endif
            @for($i=0;$i<$review->rating;$i++)
            <span class="fa fa-star" style="color:orange;"></span>
            @endfor
            @for($i=0;$i<5-$review->rating;$i++)
                <span class="fa fa-star" ></span>
            @endfor


           <h3 style="margin: -8px 30px;">{{App\Product::where('id',$review->product_id)->first()->seller==Auth::user()->username?'Seller':'Buyer'}}</h3>
        </div>
        <div class="transaction-comments">
            {{$review->comments}}
        </div>
        <div class="transaction-time">
            By {{App\User::where('id',$review->from_user)->first()->username}}:{{$review->created_date()}}
        </div>
    </div>
    @empty
        No products now...
    @endforelse
</div>
