<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div>
        <div>
            <h4>商品画像</h4>
        </div>
        <div class="">
            <div>
                <div>
                    <div>
                        <input type="file" wire:model="file" wire:change = "onChange($event.target.value)">
                    </div>
                    <div>
                        <button wire:click="upload" >画像を選択する</button>
                    </div>
                    <div>
                        <img src="{{asset($image_url)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

