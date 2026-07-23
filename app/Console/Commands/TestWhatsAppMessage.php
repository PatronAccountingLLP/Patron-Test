<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestWhatsAppMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whatsapp:test {phone} {--name=Test User}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test WhatsApp message sending via CallMeBot API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $phone = $this->argument('phone');
        $name = $this->option('name');

        // Validate phone number
        if (strlen($phone) !== 10 || !ctype_digit($phone)) {
            $this->error('❌ Phone number must be exactly 10 digits');
            return 1;
        }

        // Check if API key is configured
        $apiKey = env('CALLMEBOT_API_KEY');
        if (!$apiKey) {
            $this->error('❌ CallMeBot API key not configured!');
            $this->line('');
            $this->info('To get your API key:');
            $this->info('1. Add +34 644 44 93 81 to WhatsApp contacts');
            $this->info('2. Send: "I allow callmebot to send me messages"');
            $this->info('3. Copy the API key you receive');
            $this->info('4. Add to .env: CALLMEBOT_API_KEY=your_key');
            return 1;
        }

        $this->info('📱 Testing WhatsApp message...');
        $this->line('');

        // Format phone number
        $formattedPhone = '+91' . $phone;

        // Create test message
        $message = "🎉 Test Message from Bizfoc\n\n";
        $message .= "Hello {$name}!\n\n";
        $message .= "This is a test message to verify WhatsApp integration.\n\n";
        $message .= "If you received this, the integration is working perfectly! ✅\n\n";
        $message .= "Sent at: " . date('d M Y, h:i A') . "\n\n";
        $message .= "- Bizfoc Team";

        try {
            $url = "https://api.callmebot.com/whatsapp.php?phone={$formattedPhone}&text=" . urlencode($message) . "&apikey={$apiKey}";
            
            $this->info("Sending to: {$formattedPhone}");
            $this->info("API Key: " . substr($apiKey, 0, 3) . '***');
            $this->line('');

            $response = @file_get_contents($url);

            if ($response === false) {
                $this->error('❌ Failed to send message');
                $this->line('');
                $this->warn('Possible reasons:');
                $this->line('• API key is incorrect');
                $this->line('• Phone number not authorized');
                $this->line('• Internet connection issue');
                return 1;
            }

            $this->info('✅ Message sent successfully!');
            $this->line('');
            $this->info("API Response: {$response}");
            $this->line('');
            $this->info('Check WhatsApp on: ' . $phone);
            
            return 0;

        } catch (\Exception $e) {
            $this->error('❌ Error: ' . $e->getMessage());
            return 1;
        }
    }
}
