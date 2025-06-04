<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зелено-желтый калькулятор займов https://progaem.com/ </title>

    <style>
        .loan-calculator-app {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 15px;
            width: 100%;
        }
        
        .loan-calculator-app * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .lc-page-title {
            text-align: center;
            margin: 15px 0 30px;
            color: #2c3e50;
            max-width: 800px;
        }
        
        .lc-page-title h1 {
            font-size: 26.1px;
            margin-bottom: 10.8px;
            background: linear-gradient(135deg, #27ae60 0%, rgba(9, 226, 63, 0.98) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .lc-page-title p {
            font-size: 13.5px;
            color: #495057;
            line-height: 1.5;
        }
        
        .lc-calculators-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 28.8px;
            width: 100%;
            max-width: 1296px;
            margin-bottom: 28.8px;
        }
        
        .lc-calculator-container {
            width: 100%;
            max-width: 576px;
            background: white;
            border-radius: 10.8px;
            box-shadow: 0 7.2px 21.6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #e9ecef;
        }
        
        .lc-calculator-container:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }
        
        .lc-header {
            background: linear-gradient(135deg, #27ae60 0%, rgba(9, 226, 63, 0.98) 100%);
            color: white;
            padding: 18px 21.6px;
            text-align: center;
            position: relative;
        }
        
        .lc-header h1 {
            font-size: 18.9px;
            font-weight: 600;
            margin-bottom: 5.76px;
        }
        
        .lc-header p {
            font-size: 11.7px;
            opacity: 0.9;
        }
        
        .lc-calculator-body {
            display: flex;
            flex-wrap: wrap;
        }
        
        .lc-calculator-inputs {
            flex: 1;
            min-width: 216px;
            padding: 21.6px;
            border-right: 1px solid #edf2f7;
        }
        
        .lc-calculator-results {
            flex: 1;
            min-width: 216px;
            padding: 21.6px;
            background: linear-gradient(135deg, #f8fcf9 0%, #fef9e7 100%);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .lc-input-section {
            margin-bottom: 21.6px;
            position: relative;
        }
        
        .lc-input-title {
            display: flex;
            align-items: center;
            margin-bottom: 10.8px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 12.96px;
        }
        
        .lc-input-title i {
            margin-right: 7.2px;
            color: rgba(9, 226, 63, 0.98);
            font-size: 14.4px;
        }
        
        .lc-value-display {
            font-size: 23.04px;
            font-weight: 700;
            background: linear-gradient(135deg, #27ae60 0%, rgba(9, 226, 63, 0.98) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 14.4px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .lc-slider-container {
            position: relative;
            height: 36px;
        }
        
        .lc-slider {
            -webkit-appearance: none;
            width: 100%;
            height: 5.76px;
            border-radius: 2.88px;
            background: linear-gradient(90deg, #27ae60 0%,rgba(9, 226, 63, 0.98) var(--slider-progress), #e2e8f0 var(--slider-progress), #e2e8f0 100%);
            outline: none;
            transition: all 0.3s ease;
        }
        
        .lc-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18.72px;
            height: 18.72px;
            border-radius: 50%;
            background: white;
            cursor: pointer;
            box-shadow: 0 2.16px 7.2px rgba(0, 0, 0, 0.15);
            border: 2.16px solid rgba(9, 226, 63, 0.98);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .lc-slider::-webkit-slider-thumb:hover {
            transform: scale(1.2);
            box-shadow: 0 3px 10px rgba(243, 156, 18, 0.4);
            border-color: #27ae60;
        }
        
        .lc-slider-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 7.2px;
            color: #718096;
            font-size: 10.08px;
            font-weight: 500;
        }
        
        .lc-result-section {
            background: white;
            border-radius: 8.64px;
            padding: 18px;
            border: 1px solid #f1f8e9;
            box-shadow: 0 3.6px 10.8px rgba(0, 0, 0, 0.02);
            margin-bottom: 21.6px;
            transition: all 0.4s ease;
        }
        
        .lc-result-section:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
        }
        
        .lc-result-row {
            display: flex;
            justify-content: space-between;
            padding: 10.8px 0;
            border-bottom: 1px solid #f1f8e9;
            transition: all 0.3s ease;
        }
        
        .lc-result-row:hover {
            background: rgba(241, 248, 233, 0.3);
        }
        
        .lc-result-row:last-child {
            border-bottom: none;
        }
        
        .lc-result-label {
            display: flex;
            align-items: center;
            color: #4a5568;
            font-size: 12.24px;
            font-weight: 500;
        }
        
        .lc-result-label i {
            margin-right: 7.2px;
            color:rgb(39, 189, 64);
            font-size: 12.96px;
        }
        
        .lc-result-value {
            font-weight: 700;
            font-size: 12.96px;
            color: #2d3748;
        }
        
        .lc-btn-submit {
            background: linear-gradient(135deg,rgb(27, 194, 54) 0%,rgb(82, 243, 18) 100%);
            color: white;
            border: none;
            width: 100%;
            padding: 12.96px;
            font-size: 12.96px;
            font-weight: 600;
            border-radius: 7.2px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            letter-spacing: 0.36px;
            margin-top: 7.2px;
            box-shadow: 0 2.88px 8.64px rgba(39, 174, 96, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .lc-btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: 0.5s;
        }
        
        .lc-btn-submit:hover::before {
            left: 100%;
        }
        
        .lc-btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 4.32px 12.96px rgba(243, 156, 18, 0.35);
        }
        
        .lc-btn-submit:active {
            transform: translateY(1px);
        }
        
        .lc-info-note {
            padding: 10.8px;
            background: linear-gradient(135deg, #f1f9f4 0%, #fef9e7 100%);
            border-radius: 7.2px;
            border-left: 2.16px solid rgba(9, 226, 63, 0.98);
            font-size: 10.08px;
            color: #4a5568;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .lc-info-note:hover {
            transform: scale(1.02);
        }
        
        .lc-info-note strong {
            color: rgba(9, 226, 63, 0.98);
        }
        
        .lc-calculator-divider {
            width: 100%;
            text-align: center;
            margin: 14.4px 0;
            color: rgba(9, 226, 63, 0.98);
            font-size: 17.28px;
            font-weight: bold;
        }
        
        .lc-offer-badge {
            position: absolute;
            top: 10.8px;
            right: 10.8px;
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
            color: white;
            padding: 3.6px 8.64px;
            border-radius: 14.4px;
            font-size: 9.36px;
            font-weight: 600;
            box-shadow: 0 2.16px 5.76px rgba(231, 76, 60, 0.2);
            animation: lc-pulse 2s infinite;
        }
        
        @keyframes lc-pulse {
            0% { 
                transform: scale(1); 
                box-shadow: 0 2.16px 5.76px rgba(231, 76, 60, 0.2);
            }
            50% { 
                transform: scale(1.05);
                box-shadow: 0 3px 10px rgba(231, 76, 60, 0.3);
            }
            100% { 
                transform: scale(1);
                box-shadow: 0 2.16px 5.76px rgba(231, 76, 60, 0.2);
            }
        }
        
        .lc-glowing-border {
            position: relative;
        }
        
        /* Адаптивность для мобильных */
        @media (max-width: 768px) {
            .lc-calculator-body {
                flex-direction: column;
            }
            
            .lc-calculator-inputs {
                border-right: none;
                border-bottom: 1px solid #edf2f7;
            }
            
            .lc-calculator-results {
                padding: 18px;
            }
            
            .lc-header {
                padding: 14.4px;
            }
            
            .lc-header h1 {
                font-size: 15.84px;
            }
            
            .lc-value-display {
                font-size: 20.16px;
            }
            
            .lc-calculators-container {
                flex-direction: column;
                align-items: center;
                gap: 21.6px;
            }
            
            .lc-page-title h1 {
                font-size: 20.16px;
            }
            
            .lc-page-title p {
                font-size: 11.52px;
            }
        }
        
        @media (max-width: 480px) {
            .lc-value-display {
                font-size: 17.28px;
            }
            
            .lc-calculator-inputs, 
            .lc-calculator-results {
                padding: 14.4px;
            }
            
            .lc-result-label {
                font-size: 10.8px;
            }
            
            .lc-result-value {
                font-size: 11.52px;
            }
            
            .lc-btn-submit {
                padding: 11.52px;
                font-size: 11.52px;
            }
        }
    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

        <div class="button-container">
            <a href="https://progaem.com/usluga-sozdanie-kalkulyatora-zajmov-dlya-mfo.html" class="btn btn-primary"  target=_blank>
                <i class="fas fa-calculator"></i>
                Заказать калькулятор МФО
            </a>
            <br>
            <a href="https://progaem.com/kontakty" class="btn btn-secondary"  target=_blank>
                <i class="fas fa-address-book"></i>
                Контакты
            </a>
        </div>

    <div class="loan-calculator-app">
        <div class="lc-page-title">
            <h1><i class="fas fa-calculator"></i> Зелено-желтый калькулятор займов</h1>
            <p>Два компактных калькулятора с зелено-желтой цветовой схемой. Оба начинаются с суммы 7 000 рублей на срок 7 дней. Беспроцентный период до 15 000 рублей на 15 дней.</p>
        </div>
        
        <div class="lc-calculators-container">
            <!-- Первый калькулятор -->
            <div class="lc-calculator-container lc-glowing-border">
                <div class="lc-header">
                    <h1><i class="fas fa-calculator"></i> Калькулятор #1</h1>
                    <p>Быстрый расчет условий займа</p>
                    <div class="lc-offer-badge">Без процентов!</div>
                </div>
                
                <div class="lc-calculator-body">
                    <div class="lc-calculator-inputs">
                        <div class="lc-input-section">
                            <div class="lc-input-title">
                                <i class="fas fa-ruble-sign"></i> Выберите сумму
                            </div>
                            <div class="lc-value-display" id="amount-value1">7 000 руб.</div>
                            <div class="lc-slider-container">
                                <input 
                                    type="range" 
                                    min="3000" 
                                    max="50000" 
                                    step="1000" 
                                    value="7000" 
                                    class="lc-slider" 
                                    id="amount-slider1"
                                >
                                <div class="lc-slider-labels">
                                    <span>3 000 руб.</span>
                                    <span>50 000 руб.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lc-input-section">
                            <div class="lc-input-title">
                                <i class="far fa-calendar-alt"></i> Выберите срок
                            </div>
                            <div class="lc-value-display" id="term-value1">7 дней</div>
                            <div class="lc-slider-container">
                                <input 
                                    type="range" 
                                    min="7" 
                                    max="30" 
                                    step="1" 
                                    value="7" 
                                    class="lc-slider" 
                                    id="term-slider1"
                                >
                                <div class="lc-slider-labels">
                                    <span>7 дней</span>
                                    <span>30 дней</span>
                                </div>
                            </div>
                        </div>
                        
                        <button class="lc-btn-submit" id="submit-btn1">
                            <i class="fas fa-hand-holding-usd"></i> ПОЛУЧИТЬ ДЕНЬГИ
                        </button>
                    </div>
                    
                    <div class="lc-calculator-results">
                        <div class="lc-result-section">
                            <div class="lc-result-row">
                                <div class="lc-result-label">
                                    <i class="fas fa-wallet"></i> Итого к оплате
                                </div>
                                <div class="lc-result-value" id="total-amount1">7 000 руб.</div>
                            </div>
                            <div class="lc-result-row">
                                <div class="lc-result-label">
                                    <i class="far fa-clock"></i> Оплатить до
                                </div>
                                <div class="lc-result-value" id="repayment-date1">10.06.2025</div>
                            </div>
                        </div>
                        
                        <div class="lc-info-note">
                            <strong>Выгодное предложение:</strong> Займы до 15 000 рублей на срок до 15 дней - <strong>без процентов!</strong>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lc-calculator-divider">
                <i class="fas fa-arrows-alt-h"></i>
            </div>
            
            <!-- Второй калькулятор -->
            <div class="lc-calculator-container lc-glowing-border">
                <div class="lc-header">
                    <h1><i class="fas fa-calculator"></i> Калькулятор #2</h1>
                    <p>Быстрый расчет условий займа</p>
                    <div class="lc-offer-badge">Без процентов!</div>
                </div>
                
                <div class="lc-calculator-body">
                    <div class="lc-calculator-inputs">
                        <div class="lc-input-section">
                            <div class="lc-input-title">
                                <i class="fas fa-ruble-sign"></i> Выберите сумму
                            </div>
                            <div class="lc-value-display" id="amount-value2">7 000 руб.</div>
                            <div class="lc-slider-container">
                                <input 
                                    type="range" 
                                    min="3000" 
                                    max="50000" 
                                    step="1000" 
                                    value="7000" 
                                    class="lc-slider" 
                                    id="amount-slider2"
                                >
                                <div class="lc-slider-labels">
                                    <span>3 000 руб.</span>
                                    <span>50 000 руб.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lc-input-section">
                            <div class="lc-input-title">
                                <i class="far fa-calendar-alt"></i> Выберите срок
                            </div>
                            <div class="lc-value-display" id="term-value2">7 дней</div>
                            <div class="lc-slider-container">
                                <input 
                                    type="range" 
                                    min="7" 
                                    max="30" 
                                    step="1" 
                                    value="7" 
                                    class="lc-slider" 
                                    id="term-slider2"
                                >
                                <div class="lc-slider-labels">
                                    <span>7 дней</span>
                                    <span>30 дней</span>
                                </div>
                            </div>
                        </div>
                        
                        <button class="lc-btn-submit" id="submit-btn2">
                            <i class="fas fa-hand-holding-usd"></i> ПОЛУЧИТЬ ДЕНЬГИ
                        </button>
                    </div>
                    
                    <div class="lc-calculator-results">
                        <div class="lc-result-section">
                            <div class="lc-result-row">
                                <div class="lc-result-label">
                                    <i class="fas fa-wallet"></i> Итого к оплате
                                </div>
                                <div class="lc-result-value" id="total-amount2">7 000 руб.</div>
                            </div>
                            <div class="lc-result-row">
                                <div class="lc-result-label">
                                    <i class="far fa-clock"></i> Оплатить до
                                </div>
                                <div class="lc-result-value" id="repayment-date2">10.06.2025</div>
                            </div>
                        </div>
                        
                        <div class="lc-info-note">
                            <strong>Выгодное предложение:</strong> Займы до 15 000 рублей на срок до 15 дней - <strong>без процентов!</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Общие функции для обоих калькуляторов
        
        // Форматирование чисел с разделителями
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }
        
        // Расчет даты погашения
        function calculateRepaymentDate(days) {
            const today = new Date();
            const repayment = new Date(today);
            repayment.setDate(today.getDate() + days);
            
            const day = repayment.getDate().toString().padStart(2, '0');
            const month = (repayment.getMonth() + 1).toString().padStart(2, '0');
            const year = repayment.getFullYear();
            
            return `${day}.${month}.${year}`;
        }
        
        // Расчет суммы к оплате с учетом условий
        function calculateTotalAmount(amount, term) {
            // Условие: до 15 000 руб. на срок до 15 дней - без процентов
            if (amount <= 15000 && term <= 15) {
                return amount;
            }
            
            // Во всех остальных случаях применяем ставку 0.8% в день
            const interest = amount * 0.008 * term;
            return Math.round(amount + interest);
        }
        
        // Инициализация калькулятора
        function initCalculator(calculatorId) {
            const amountSlider = document.getElementById(`amount-slider${calculatorId}`);
            const termSlider = document.getElementById(`term-slider${calculatorId}`);
            const amountValue = document.getElementById(`amount-value${calculatorId}`);
            const termValue = document.getElementById(`term-value${calculatorId}`);
            const totalAmount = document.getElementById(`total-amount${calculatorId}`);
            const repaymentDate = document.getElementById(`repayment-date${calculatorId}`);
            const submitButton = document.getElementById(`submit-btn${calculatorId}`);
            
            // Обновление значений
            function updateValues() {
                const amount = parseInt(amountSlider.value);
                const term = parseInt(termSlider.value);
                
                // Обновляем отображаемые значения
                amountValue.textContent = `${formatNumber(amount)} руб.`;
                termValue.textContent = `${term} ${term === 1 ? 'день' : term < 5 ? 'дня' : 'дней'}`;
                
                // Рассчитываем сумму к оплате
                const total = calculateTotalAmount(amount, term);
                totalAmount.textContent = `${formatNumber(total)} руб.`;
                
                // Обновляем дату погашения
                repaymentDate.textContent = calculateRepaymentDate(term);
                
                // Обновляем прогресс ползунков с новыми минимальными значениями
                const amountProgress = ((amount - 3000) / (50000 - 3000)) * 100;
                const termProgress = ((term - 7) / (30 - 7)) * 100;
                amountSlider.style.setProperty('--slider-progress', `${amountProgress}%`);
                termSlider.style.setProperty('--slider-progress', `${termProgress}%`);
            }
            
            // Инициализация значений
            updateValues();
            
            // Обработчики событий
            amountSlider.addEventListener('input', updateValues);
            termSlider.addEventListener('input', updateValues);
            
            // Обработка кнопки
            submitButton.addEventListener('click', function() {
                const amount = parseInt(amountSlider.value);
                const term = parseInt(termSlider.value);
                const total = calculateTotalAmount(amount, term);
                
                // Показать сообщение
                alert(`Заявка на займ #${calculatorId}:\nСумма: ${formatNumber(amount)} руб.\nСрок: ${term} дней\nК возврату: ${formatNumber(total)} руб.`);
            });
        }
        
        // Инициализация обоих калькуляторов при загрузке страницы
        document.addEventListener('DOMContentLoaded', function() {
            initCalculator(1);
            initCalculator(2);
        });
    </script>
</body>
</html>
