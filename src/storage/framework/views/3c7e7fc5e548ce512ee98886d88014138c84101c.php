<div>
    
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
                        <img src="<?php echo e(asset($image_url)); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/resources/views/livewire/chain.blade.php ENDPATH**/ ?>